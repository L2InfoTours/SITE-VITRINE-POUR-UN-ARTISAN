<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210925131700 extends AbstractMigration
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
        $this->addSql('ALTER TABLE chantier ADD admin_id INT NOT NULL');
        $this->addSql('ALTER TABLE chantier ADD CONSTRAINT FK_636F27F6642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_636F27F6642B8210 ON chantier (admin_id)');
        $this->addSql('ALTER TABLE demande_devis ADD admin_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_devis ADD CONSTRAINT FK_7DF94602642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_7DF94602642B8210 ON demande_devis (admin_id)');
        $this->addSql('ALTER TABLE image ADD chantier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FD0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_C53D045FD0C0049D ON image (chantier_id)');
        $this->addSql('ALTER TABLE offre ADD admin_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE offre ADD contractuel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F9A36E1CD FOREIGN KEY (contractuel_id) REFERENCES contractuel_histo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_AF86866F642B8210 ON offre (admin_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AF86866F9A36E1CD ON offre (contractuel_id)');
        $this->addSql('ALTER TABLE reponse ADD offre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC74CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_5FB6DEC74CC8505A ON reponse (offre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE chantier_type_chantier');
        $this->addSql('ALTER TABLE chantier DROP CONSTRAINT FK_636F27F6642B8210');
        $this->addSql('DROP INDEX IDX_636F27F6642B8210');
        $this->addSql('ALTER TABLE chantier DROP admin_id');
        $this->addSql('ALTER TABLE demande_devis DROP CONSTRAINT FK_7DF94602642B8210');
        $this->addSql('DROP INDEX IDX_7DF94602642B8210');
        $this->addSql('ALTER TABLE demande_devis DROP admin_id');
        $this->addSql('ALTER TABLE image DROP CONSTRAINT FK_C53D045FD0C0049D');
        $this->addSql('DROP INDEX IDX_C53D045FD0C0049D');
        $this->addSql('ALTER TABLE image DROP chantier_id');
        $this->addSql('ALTER TABLE offre DROP CONSTRAINT FK_AF86866F642B8210');
        $this->addSql('ALTER TABLE offre DROP CONSTRAINT FK_AF86866F9A36E1CD');
        $this->addSql('DROP INDEX IDX_AF86866F642B8210');
        $this->addSql('DROP INDEX UNIQ_AF86866F9A36E1CD');
        $this->addSql('ALTER TABLE offre DROP admin_id');
        $this->addSql('ALTER TABLE offre DROP contractuel_id');
        $this->addSql('ALTER TABLE reponse DROP CONSTRAINT FK_5FB6DEC74CC8505A');
        $this->addSql('DROP INDEX IDX_5FB6DEC74CC8505A');
        $this->addSql('ALTER TABLE reponse DROP offre_id');
    }
}
