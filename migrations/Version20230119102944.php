<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230119102944 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE house (id INT AUTO_INCREMENT NOT NULL, property_id VARCHAR(50) NOT NULL, area VARCHAR(2) DEFAULT NULL, city VARCHAR(200) NOT NULL, cover_img_url VARCHAR(255) DEFAULT NULL, furnish VARCHAR(100) DEFAULT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, postal_code VARCHAR(6) NOT NULL, property_type VARCHAR(100) DEFAULT NULL, availability VARCHAR(100) NOT NULL, rent INT NOT NULL, deposit INT NOT NULL, total_cost INT NOT NULL, cost_sqm DOUBLE PRECISION DEFAULT NULL, title VARCHAR(255) NOT NULL, gender VARCHAR(100) DEFAULT NULL, is_room_active TINYINT(1) NOT NULL, page_title VARCHAR(255) NOT NULL, roommates INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE house');
    }
}
