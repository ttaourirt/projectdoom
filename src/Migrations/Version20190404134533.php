<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190404134533 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE rank (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE land (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, land_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_232B318C1994904A (land_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, rank_id INT NOT NULL, pseudo VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) DEFAULT NULL, level INT NOT NULL, guild VARCHAR(255) DEFAULT NULL, INDEX IDX_34DCD1767616678F (rank_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C1994904A FOREIGN KEY (land_id) REFERENCES land (id)');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD1767616678F FOREIGN KEY (rank_id) REFERENCES rank (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD1767616678F');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C1994904A');
        $this->addSql('DROP TABLE rank');
        $this->addSql('DROP TABLE land');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE person');
    }
}
