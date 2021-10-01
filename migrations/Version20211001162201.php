<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211001162201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, utilisateur VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE chantier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, admin_id INTEGER NOT NULL, nom VARCHAR(255) NOT NULL, contenu CLOB DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_636F27F6642B8210 ON chantier (admin_id)');
        $this->addSql('CREATE TABLE chantier_type_chantier (chantier_id INTEGER NOT NULL, type_chantier_id INTEGER NOT NULL, PRIMARY KEY(chantier_id, type_chantier_id))');
        $this->addSql('CREATE INDEX IDX_CDE319D8D0C0049D ON chantier_type_chantier (chantier_id)');
        $this->addSql('CREATE INDEX IDX_CDE319D89BD9D30C ON chantier_type_chantier (type_chantier_id)');
        $this->addSql('CREATE TABLE contractuel_histo (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation CLOB NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, appreciation VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE demande_devis (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, admin_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, description CLOB NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_7DF94602642B8210 ON demande_devis (admin_id)');
        $this->addSql('CREATE TABLE image (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, chantier_id INTEGER DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, lien VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_C53D045FD0C0049D ON image (chantier_id)');
        $this->addSql('CREATE TABLE offre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, admin_id INTEGER DEFAULT NULL, contractuel_id INTEGER DEFAULT NULL, date DATE NOT NULL, niveau_etude VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, intitule VARCHAR(255) NOT NULL, mission CLOB NOT NULL, remuneration NUMERIC(7, 2) DEFAULT NULL, profile CLOB DEFAULT NULL, type VARCHAR(255) NOT NULL, duree INTEGER DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_AF86866F642B8210 ON offre (admin_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF86866F9A36E1CD ON offre (contractuel_id)');
        $this->addSql('CREATE TABLE reponse (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, offre_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation CLOB NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_5FB6DEC74CC8505A ON reponse (offre_id)');
        $this->addSql('CREATE TABLE type_chantier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, chantier_id INTEGER DEFAULT NULL, type VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_AE90000AD0C0049D ON type_chantier (chantier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE chantier');
        $this->addSql('DROP TABLE chantier_type_chantier');
        $this->addSql('DROP TABLE contractuel_histo');
        $this->addSql('DROP TABLE demande_devis');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE type_chantier');
    }
}
