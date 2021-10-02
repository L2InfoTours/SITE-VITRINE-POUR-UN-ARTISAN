<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211001085547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chantier_type_chantier (chantier_id INT NOT NULL, type_chantier_id INT NOT NULL, PRIMARY KEY(chantier_id, type_chantier_id))');
        $this->addSql('CREATE INDEX IDX_CDE319D8D0C0049D ON chantier_type_chantier (chantier_id)');
        $this->addSql('CREATE INDEX IDX_CDE319D89BD9D30C ON chantier_type_chantier (type_chantier_id)');
        $this->addSql('ALTER TABLE chantier_type_chantier ADD CONSTRAINT FK_CDE319D8D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE chantier_type_chantier ADD CONSTRAINT FK_CDE319D89BD9D30C FOREIGN KEY (type_chantier_id) REFERENCES type_chantier (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE demande_devis ALTER status SET DEFAULT \'En cours\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE chantier_type_chantier');
        $this->addSql('ALTER TABLE demande_devis ALTER status DROP DEFAULT');
    }
}
