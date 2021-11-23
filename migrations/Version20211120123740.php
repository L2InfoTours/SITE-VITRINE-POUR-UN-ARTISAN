<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211120123740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP INDEX IDX_636F27F6642B8210');
        $this->addSql('CREATE TEMPORARY TABLE __temp__chantier AS SELECT id, nom, contenu, adresse FROM chantier');
        $this->addSql('DROP TABLE chantier');
        $this->addSql('CREATE TABLE chantier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE BINARY, adresse VARCHAR(255) DEFAULT NULL COLLATE BINARY, description CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO chantier (id, nom, description, adresse) SELECT id, nom, contenu, adresse FROM __temp__chantier');
        $this->addSql('DROP TABLE __temp__chantier');
        $this->addSql('DROP INDEX IDX_CDE319D89BD9D30C');
        $this->addSql('DROP INDEX IDX_CDE319D8D0C0049D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__chantier_type_chantier AS SELECT chantier_id, type_chantier_id FROM chantier_type_chantier');
        $this->addSql('DROP TABLE chantier_type_chantier');
        $this->addSql('CREATE TABLE chantier_type_chantier (chantier_id INTEGER NOT NULL, type_chantier_id INTEGER NOT NULL, PRIMARY KEY(chantier_id, type_chantier_id), CONSTRAINT FK_CDE319D8D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_CDE319D89BD9D30C FOREIGN KEY (type_chantier_id) REFERENCES type_chantier (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO chantier_type_chantier (chantier_id, type_chantier_id) SELECT chantier_id, type_chantier_id FROM __temp__chantier_type_chantier');
        $this->addSql('DROP TABLE __temp__chantier_type_chantier');
        $this->addSql('CREATE INDEX IDX_CDE319D89BD9D30C ON chantier_type_chantier (type_chantier_id)');
        $this->addSql('CREATE INDEX IDX_CDE319D8D0C0049D ON chantier_type_chantier (chantier_id)');
        $this->addSql('DROP INDEX IDX_7DF94602642B8210');
        $this->addSql('CREATE TEMPORARY TABLE __temp__demande_devis AS SELECT id, nom, adresse, description, telephone, email, status FROM demande_devis');
        $this->addSql('DROP TABLE demande_devis');
        $this->addSql('CREATE TABLE demande_devis (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE BINARY, adresse VARCHAR(255) NOT NULL COLLATE BINARY, description CLOB NOT NULL COLLATE BINARY, telephone VARCHAR(255) NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, status VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO demande_devis (id, nom, adresse, description, telephone, email, status) SELECT id, nom, adresse, description, telephone, email, status FROM __temp__demande_devis');
        $this->addSql('DROP TABLE __temp__demande_devis');
        $this->addSql('DROP INDEX IDX_C53D045FD0C0049D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__image AS SELECT id, chantier_id, titre, image, updated_at FROM image');
        $this->addSql('DROP TABLE image');
        $this->addSql('CREATE TABLE image (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, chantier_id INTEGER DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL COLLATE BINARY, image VARCHAR(255) NOT NULL COLLATE BINARY, updated_at DATETIME NOT NULL, CONSTRAINT FK_C53D045FD0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO image (id, chantier_id, titre, image, updated_at) SELECT id, chantier_id, titre, image, updated_at FROM __temp__image');
        $this->addSql('DROP TABLE __temp__image');
        $this->addSql('CREATE INDEX IDX_C53D045FD0C0049D ON image (chantier_id)');
        $this->addSql('DROP INDEX UNIQ_AF86866F9A36E1CD');
        $this->addSql('DROP INDEX IDX_AF86866F642B8210');
        $this->addSql('CREATE TEMPORARY TABLE __temp__offre AS SELECT id, contractuel_id, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree FROM offre');
        $this->addSql('DROP TABLE offre');
        $this->addSql('CREATE TABLE offre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, contractuel_id INTEGER DEFAULT NULL, date DATE DEFAULT \'now()\' NOT NULL, niveau_etude VARCHAR(255) NOT NULL COLLATE BINARY, lieu VARCHAR(255) NOT NULL COLLATE BINARY, intitule VARCHAR(255) NOT NULL COLLATE BINARY, mission CLOB NOT NULL COLLATE BINARY, remuneration NUMERIC(8, 2) DEFAULT NULL, profile CLOB DEFAULT NULL COLLATE BINARY, type VARCHAR(255) NOT NULL COLLATE BINARY, duree INTEGER DEFAULT NULL, CONSTRAINT FK_AF86866F9A36E1CD FOREIGN KEY (contractuel_id) REFERENCES contractuel_histo (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO offre (id, contractuel_id, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree) SELECT id, contractuel_id, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree FROM __temp__offre');
        $this->addSql('DROP TABLE __temp__offre');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF86866F9A36E1CD ON offre (contractuel_id)');
        $this->addSql('DROP INDEX IDX_5FB6DEC74CC8505A');
        $this->addSql('CREATE TEMPORARY TABLE __temp__reponse AS SELECT id, offre_id, nom, prenom, cv, updated_at, lettre_motivation, telephone, email FROM reponse');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('CREATE TABLE reponse (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, offre_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL COLLATE BINARY, prenom VARCHAR(255) NOT NULL COLLATE BINARY, cv VARCHAR(255) NOT NULL COLLATE BINARY, updated_at DATETIME NOT NULL, lettre_motivation CLOB NOT NULL COLLATE BINARY, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_5FB6DEC74CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO reponse (id, offre_id, nom, prenom, cv, updated_at, lettre_motivation, telephone, email) SELECT id, offre_id, nom, prenom, cv, updated_at, lettre_motivation, telephone, email FROM __temp__reponse');
        $this->addSql('DROP TABLE __temp__reponse');
        $this->addSql('CREATE INDEX IDX_5FB6DEC74CC8505A ON reponse (offre_id)');
        $this->addSql('ALTER TABLE type_chantier ADD COLUMN image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type_chantier ADD COLUMN updated_at DATETIME NOT NULL');
        $this->addSql('DROP INDEX IDX_75EA56E016BA31DB');
        $this->addSql('DROP INDEX IDX_75EA56E0E3BD61CE');
        $this->addSql('DROP INDEX IDX_75EA56E0FB7336F0');
        $this->addSql('CREATE TEMPORARY TABLE __temp__messenger_messages AS SELECT id, body, headers, queue_name, created_at, available_at, delivered_at FROM messenger_messages');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL COLLATE BINARY, headers CLOB NOT NULL COLLATE BINARY, queue_name VARCHAR(255) NOT NULL COLLATE BINARY, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) SELECT id, body, headers, queue_name, created_at, available_at, delivered_at FROM __temp__messenger_messages');
        $this->addSql('DROP TABLE __temp__messenger_messages');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, utilisateur VARCHAR(255) NOT NULL COLLATE BINARY, mdp VARCHAR(255) NOT NULL COLLATE BINARY, nom VARCHAR(255) NOT NULL COLLATE BINARY, prenom VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__chantier AS SELECT id, nom, description, adresse FROM chantier');
        $this->addSql('DROP TABLE chantier');
        $this->addSql('CREATE TABLE chantier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, contenu CLOB DEFAULT NULL COLLATE BINARY, admin_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO chantier (id, nom, contenu, adresse) SELECT id, nom, description, adresse FROM __temp__chantier');
        $this->addSql('DROP TABLE __temp__chantier');
        $this->addSql('CREATE INDEX IDX_636F27F6642B8210 ON chantier (admin_id)');
        $this->addSql('DROP INDEX IDX_CDE319D8D0C0049D');
        $this->addSql('DROP INDEX IDX_CDE319D89BD9D30C');
        $this->addSql('CREATE TEMPORARY TABLE __temp__chantier_type_chantier AS SELECT chantier_id, type_chantier_id FROM chantier_type_chantier');
        $this->addSql('DROP TABLE chantier_type_chantier');
        $this->addSql('CREATE TABLE chantier_type_chantier (chantier_id INTEGER NOT NULL, type_chantier_id INTEGER NOT NULL, PRIMARY KEY(chantier_id, type_chantier_id))');
        $this->addSql('INSERT INTO chantier_type_chantier (chantier_id, type_chantier_id) SELECT chantier_id, type_chantier_id FROM __temp__chantier_type_chantier');
        $this->addSql('DROP TABLE __temp__chantier_type_chantier');
        $this->addSql('CREATE INDEX IDX_CDE319D8D0C0049D ON chantier_type_chantier (chantier_id)');
        $this->addSql('CREATE INDEX IDX_CDE319D89BD9D30C ON chantier_type_chantier (type_chantier_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__demande_devis AS SELECT id, nom, adresse, description, telephone, email, status FROM demande_devis');
        $this->addSql('DROP TABLE demande_devis');
        $this->addSql('CREATE TABLE demande_devis (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, description CLOB NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, admin_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO demande_devis (id, nom, adresse, description, telephone, email, status) SELECT id, nom, adresse, description, telephone, email, status FROM __temp__demande_devis');
        $this->addSql('DROP TABLE __temp__demande_devis');
        $this->addSql('CREATE INDEX IDX_7DF94602642B8210 ON demande_devis (admin_id)');
        $this->addSql('DROP INDEX IDX_C53D045FD0C0049D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__image AS SELECT id, chantier_id, titre, image, updated_at FROM image');
        $this->addSql('DROP TABLE image');
        $this->addSql('CREATE TABLE image (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, chantier_id INTEGER DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL)');
        $this->addSql('INSERT INTO image (id, chantier_id, titre, image, updated_at) SELECT id, chantier_id, titre, image, updated_at FROM __temp__image');
        $this->addSql('DROP TABLE __temp__image');
        $this->addSql('CREATE INDEX IDX_C53D045FD0C0049D ON image (chantier_id)');
        $this->addSql('DROP INDEX UNIQ_AF86866F9A36E1CD');
        $this->addSql('CREATE TEMPORARY TABLE __temp__offre AS SELECT id, contractuel_id, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree FROM offre');
        $this->addSql('DROP TABLE offre');
        $this->addSql('CREATE TABLE offre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, contractuel_id INTEGER DEFAULT NULL, date DATE DEFAULT \'now()\' NOT NULL, niveau_etude VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, intitule VARCHAR(255) NOT NULL, mission CLOB NOT NULL, remuneration NUMERIC(8, 2) DEFAULT NULL, profile CLOB DEFAULT NULL, type VARCHAR(255) NOT NULL, duree INTEGER DEFAULT NULL, admin_id INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO offre (id, contractuel_id, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree) SELECT id, contractuel_id, date, niveau_etude, lieu, intitule, mission, remuneration, profile, type, duree FROM __temp__offre');
        $this->addSql('DROP TABLE __temp__offre');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF86866F9A36E1CD ON offre (contractuel_id)');
        $this->addSql('CREATE INDEX IDX_AF86866F642B8210 ON offre (admin_id)');
        $this->addSql('DROP INDEX IDX_5FB6DEC74CC8505A');
        $this->addSql('CREATE TEMPORARY TABLE __temp__reponse AS SELECT id, offre_id, nom, prenom, cv, updated_at, lettre_motivation, telephone, email FROM reponse');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('CREATE TABLE reponse (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, offre_id INTEGER DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, lettre_motivation CLOB NOT NULL, telephone NUMERIC(10, 0) NOT NULL, email VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO reponse (id, offre_id, nom, prenom, cv, updated_at, lettre_motivation, telephone, email) SELECT id, offre_id, nom, prenom, cv, updated_at, lettre_motivation, telephone, email FROM __temp__reponse');
        $this->addSql('DROP TABLE __temp__reponse');
        $this->addSql('CREATE INDEX IDX_5FB6DEC74CC8505A ON reponse (offre_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__type_chantier AS SELECT id, type FROM type_chantier');
        $this->addSql('DROP TABLE type_chantier');
        $this->addSql('CREATE TABLE type_chantier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO type_chantier (id, type) SELECT id, type FROM __temp__type_chantier');
        $this->addSql('DROP TABLE __temp__type_chantier');
    }
}
