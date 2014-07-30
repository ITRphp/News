<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140730234304 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE user_dispatch (user_id INT NOT NULL, dispatch_id INT NOT NULL, INDEX IDX_669F825AA76ED395 (user_id), INDEX IDX_669F825AC774D3B9 (dispatch_id), PRIMARY KEY(user_id, dispatch_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE user_dispatch ADD CONSTRAINT FK_669F825AA76ED395 FOREIGN KEY (user_id) REFERENCES User (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE user_dispatch ADD CONSTRAINT FK_669F825AC774D3B9 FOREIGN KEY (dispatch_id) REFERENCES Dispatch (id) ON DELETE CASCADE");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("DROP TABLE user_dispatch");
    }
}
