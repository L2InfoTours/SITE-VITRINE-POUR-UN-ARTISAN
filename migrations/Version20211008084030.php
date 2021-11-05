<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211008084030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP lien');
        $this->addSql('ALTER TABLE type_chantier DROP CONSTRAINT fk_ae90000ad0c0049d');
        $this->addSql('DROP INDEX idx_ae90000ad0c0049d');
        $this->addSql('ALTER TABLE type_chantier DROP chantier_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE image ADD lien VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE type_chantier ADD chantier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE type_chantier ADD CONSTRAINT fk_ae90000ad0c0049d FOREIGN KEY (chantier_id) REFERENCES chantier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_ae90000ad0c0049d ON type_chantier (chantier_id)');
    }
}
