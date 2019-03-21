<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20190313142918 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE matelas (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE Mattress');
        $this->addSql('DROP TABLE User');
        $this->addSql('ALTER TABLE Patient DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE Patient ADD id INT AUTO_INCREMENT NOT NULL, DROP nip, DROP date_first_scanner, DROP mep, DROP number_seance, DROP ftr, DROP comment, DROP mattress, DROP treatment');
        $this->addSql('ALTER TABLE Patient ADD PRIMARY KEY (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Mattress (id INT AUTO_INCREMENT NOT NULL, type INT NOT NULL, status VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, state VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, number_of_utilisation INT NOT NULL, commissioning DATE NOT NULL COMMENT \'date de mise en service\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE User (Surname VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci COMMENT \'Nom\', Name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci COMMENT \'Prénom\', PRIMARY KEY(Surname)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE matelas');
        $this->addSql('DROP TABLE type');
        $this->addSql('ALTER TABLE patient MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE patient DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE patient ADD nip INT NOT NULL, ADD date_first_scanner DATE NOT NULL, ADD mep DATE NOT NULL, ADD number_seance INT NOT NULL, ADD ftr DATE NOT NULL, ADD comment TEXT NOT NULL COLLATE utf8_unicode_ci, ADD mattress INT NOT NULL, ADD treatment VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP id');
        $this->addSql('ALTER TABLE patient ADD PRIMARY KEY (nip)');
    }
}
