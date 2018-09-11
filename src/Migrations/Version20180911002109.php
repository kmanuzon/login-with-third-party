<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180911002109 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE app_users ADD display_name VARCHAR(255) DEFAULT NULL, ADD first_name VARCHAR(255) DEFAULT NULL, ADD last_name VARCHAR(255) DEFAULT NULL, ADD avatar_url VARCHAR(255) DEFAULT NULL, CHANGE google_id google_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824D5499347 ON app_users (display_name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824A9D1C132 ON app_users (first_name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2502824C808BA5A ON app_users (last_name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C250282482930562 ON app_users (avatar_url)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_C2502824D5499347 ON app_users');
        $this->addSql('DROP INDEX UNIQ_C2502824A9D1C132 ON app_users');
        $this->addSql('DROP INDEX UNIQ_C2502824C808BA5A ON app_users');
        $this->addSql('DROP INDEX UNIQ_C250282482930562 ON app_users');
        $this->addSql('ALTER TABLE app_users DROP display_name, DROP first_name, DROP last_name, DROP avatar_url, CHANGE google_id google_id VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
