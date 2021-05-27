<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210527161543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE przepisy ADD kategoria_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE przepisy ADD CONSTRAINT FK_481CEAFF359B0684 FOREIGN KEY (kategoria_id) REFERENCES kategorie (id)');
        $this->addSql('CREATE INDEX IDX_481CEAFF359B0684 ON przepisy (kategoria_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE przepisy DROP FOREIGN KEY FK_481CEAFF359B0684');
        $this->addSql('DROP INDEX IDX_481CEAFF359B0684 ON przepisy');
        $this->addSql('ALTER TABLE przepisy DROP kategoria_id');
    }
}
