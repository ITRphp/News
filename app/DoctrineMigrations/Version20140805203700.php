<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140805203700 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE dispatch CHANGE category_id category_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE user CHANGE user_role user_role VARCHAR(255) DEFAULT 'ROLE_USER'");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Dispatch CHANGE category_id category_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL");
        $this->addSql("ALTER TABLE User CHANGE user_role user_role VARCHAR(255) NOT NULL");
    }
}
