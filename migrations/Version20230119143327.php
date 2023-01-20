<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230119143327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_name VARCHAR(180) NOT NULL, roles JSON NOT NULL, user_type VARCHAR(255) NOT NULL, property_id VARCHAR(255) NOT NULL, photo_url VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D64924A232CF (user_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE house CHANGE property_id property_id VARCHAR(100) NOT NULL, CHANGE area area INT DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(8) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE house CHANGE property_id property_id VARCHAR(50) NOT NULL, CHANGE area area VARCHAR(2) DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(6) NOT NULL');
    }
}
