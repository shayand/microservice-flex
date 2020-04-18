<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200418095632 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE survey_questions (id INT AUTO_INCREMENT NOT NULL, survey_id_id INT NOT NULL, text VARCHAR(255) NOT NULL, type SMALLINT NOT NULL, answers LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', INDEX IDX_2F8A16F873346C6F (survey_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE surveys (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, create_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE survey_questions ADD CONSTRAINT FK_2F8A16F873346C6F FOREIGN KEY (survey_id_id) REFERENCES surveys (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE survey_questions DROP FOREIGN KEY FK_2F8A16F873346C6F');
        $this->addSql('DROP TABLE survey_questions');
        $this->addSql('DROP TABLE surveys');
    }
}
