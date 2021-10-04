<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211004201606 extends AbstractMigration
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
        $this->addSql('CREATE TABLE chantier (id INT NOT NULL, admin_id INT NOT NULL, nom VARCHAR(255) NOT NULL, contenu TEXT DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_636F27F6642B8210 ON chantier (admin_id)');
        $this->addSql('CREATE TABLE chantier_type_chantier (chantier_id INT NOT NULL, type_chantier_id INT NOT NULL, PRIMARY KEY(chantier_id, type_chantier_id))');
        $this->addSql('CREATE INDEX IDX_CDE319D8D0C0049D ON chantier_type_chantier (chantier_id)');
        $this->addSql('CREATE INDEX IDX_CDE319D89BD9D30C ON chantier_type_chantier (type_chantier_id)');
        $this->addSql('CREATE TABLE contractuel_histo (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation TEXT NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, appreciation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE demande_devis (id INT NOT NULL, admin_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, description TEXT NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_7DF94602642B8210 ON demande_devis (admin_id)');
        $this->addSql('CREATE TABLE image (id INT NOT NULL, chantier_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, lien VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C53D045FD0C0049D ON image (chantier_id)');
        $this->addSql('CREATE TABLE offre (id INT NOT NULL, admin_id INT DEFAULT NULL, contractuel_id INT DEFAULT NULL, date DATE NOT NULL, niveau_etude VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, intitule VARCHAR(255) NOT NULL, mission TEXT NOT NULL, remuneration NUMERIC(7, 2) DEFAULT NULL, profile TEXT DEFAULT NULL, type VARCHAR(255) NOT NULL, duree INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_AF86866F642B8210 ON offre (admin_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF86866F9A36E1CD ON offre (contractuel_id)');
        $this->addSql('CREATE TABLE reponse (id INT NOT NULL, offre_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, lettre_motivation TEXT NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5FB6DEC74CC8505A ON reponse (offre_id)');
        $this->addSql('CREATE TABLE type_chantier (id INT NOT NULL, chantier_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_AE90000AD0C0049D ON type_chantier (chantier_id)');
        $this->addSql('ALTER TABLE chantier ADD CONSTRAINT FK_636F27F6642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE chantier_type_chantier ADD CONSTRAINT FK_CDE319D8D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE chantier_type_chantier ADD CONSTRAINT FK_CDE319D89BD9D30C FOREIGN KEY (type_chantier_id) REFERENCES type_chantier (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF94602642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FD0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F9A36E1CD FOREIGN KEY (contractuel_id) REFERENCES contractuel_histo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC74CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE type_chantier ADD CONSTRAINT FK_AE90000AD0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE chantier DROP CONSTRAINT FK_636F27F6642B8210');
        $this->addSql('ALTER TABLE demande_devis DROP CONSTRAINT FK_7DF94602642B8210');
        $this->addSql('ALTER TABLE offre DROP CONSTRAINT FK_AF86866F642B8210');
        $this->addSql('ALTER TABLE chantier_type_chantier DROP CONSTRAINT FK_CDE319D8D0C0049D');
        $this->addSql('ALTER TABLE image DROP CONSTRAINT FK_C53D045FD0C0049D');
        $this->addSql('ALTER TABLE type_chantier DROP CONSTRAINT FK_AE90000AD0C0049D');
        $this->addSql('ALTER TABLE offre DROP CONSTRAINT FK_AF86866F9A36E1CD');
        $this->addSql('ALTER TABLE reponse DROP CONSTRAINT FK_5FB6DEC74CC8505A');
        $this->addSql('ALTER TABLE chantier_type_chantier DROP CONSTRAINT FK_CDE319D89BD9D30C');
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
        $this->addSql('DROP TABLE chantier_type_chantier');
        $this->addSql('DROP TABLE contractuel_histo');
        $this->addSql('DROP TABLE demande_devis');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE type_chantier');
    }
}
