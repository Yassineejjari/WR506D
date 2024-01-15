<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231207082931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actor ADD reward LONGTEXT NOT NULL, ADD nationality VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE movie ADD release_date DATETIME NOT NULL, ADD description LONGTEXT NOT NULL, ADD duration INT DEFAULT NULL, ADD note DOUBLE PRECISION NOT NULL, ADD entries INT NOT NULL, ADD budget INT NOT NULL, ADD director VARCHAR(255) NOT NULL, ADD website VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actor DROP reward, DROP nationality');
        $this->addSql('ALTER TABLE movie DROP release_date, DROP description, DROP duration, DROP note, DROP entries, DROP budget, DROP director, DROP website');
    }
}
