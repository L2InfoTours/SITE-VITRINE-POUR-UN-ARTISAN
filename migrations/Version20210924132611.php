<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210924132611 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE admin_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE chantier_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE contractuel_histo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE demande_devis_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE image_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE offre_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE reponse_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_chantier_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE admin (id INT NOT NULL, utilisateur VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE chantier (id INT NOT NULL, nom VARCHAR(255) NOT NULL, contenu TEXT DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE contractuel_histo (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation TEXT NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, appreciation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE demande_devis (id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, description TEXT NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE image (id INT NOT NULL, titre VARCHAR(255) DEFAULT NULL, lien VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE offre (id INT NOT NULL, date DATE NOT NULL, niveau_etude VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, intitule VARCHAR(255) NOT NULL, mission TEXT NOT NULL, remuneration NUMERIC(7, 2) DEFAULT NULL, profile TEXT DEFAULT NULL, type VARCHAR(255) NOT NULL, duree INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE reponse (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation TEXT NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE type_chantier (id INT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE admin_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE chantier_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE contractuel_histo_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE demande_devis_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE image_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE offre_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE reponse_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_chantier_id_seq CASCADE');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE chantier');
        $this->addSql('DROP TABLE contractuel_histo');
        $this->addSql('DROP TABLE demande_devis');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE type_chantier');
    }
}
