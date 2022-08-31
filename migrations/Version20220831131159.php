<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220831131159 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_bundles (product_bundles_id INT AUTO_INCREMENT NOT NULL, product_bundles_discount INT NOT NULL, product_bundles_created DATETIME NOT NULL, product_bundles_is_active TINYINT(1) NOT NULL, product_bundles_start_date DATE NOT NULL, product_bundles_end_date DATE NOT NULL, PRIMARY KEY(product_bundles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_data (product_data_id INT AUTO_INCREMENT NOT NULL, product_name VARCHAR(255) NOT NULL, PRIMARY KEY(product_data_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_to_product_bundle (product_to_product_bundles_id INT AUTO_INCREMENT NOT NULL, product_data_id INT NOT NULL, product_bundles_id INT NOT NULL, PRIMARY KEY(product_to_product_bundles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product_bundles');
        $this->addSql('DROP TABLE product_data');
        $this->addSql('DROP TABLE product_to_product_bundle');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
