<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303170522 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE albums (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, pochette VARCHAR(255) NOT NULL, spotify VARCHAR(255) NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE albums_categorie (albums_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_8067791CECBB55AF (albums_id), INDEX IDX_8067791CBCF5E72D (categorie_id), PRIMARY KEY(albums_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artistes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artistes_albums (artistes_id INT NOT NULL, albums_id INT NOT NULL, INDEX IDX_D45596B596E1EAF4 (artistes_id), INDEX IDX_D45596B5ECBB55AF (albums_id), PRIMARY KEY(artistes_id, albums_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE albums_categorie ADD CONSTRAINT FK_8067791CECBB55AF FOREIGN KEY (albums_id) REFERENCES albums (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE albums_categorie ADD CONSTRAINT FK_8067791CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artistes_albums ADD CONSTRAINT FK_D45596B596E1EAF4 FOREIGN KEY (artistes_id) REFERENCES artistes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artistes_albums ADD CONSTRAINT FK_D45596B5ECBB55AF FOREIGN KEY (albums_id) REFERENCES albums (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE albums_categorie DROP FOREIGN KEY FK_8067791CECBB55AF');
        $this->addSql('ALTER TABLE artistes_albums DROP FOREIGN KEY FK_D45596B5ECBB55AF');
        $this->addSql('ALTER TABLE artistes_albums DROP FOREIGN KEY FK_D45596B596E1EAF4');
        $this->addSql('ALTER TABLE albums_categorie DROP FOREIGN KEY FK_8067791CBCF5E72D');
        $this->addSql('DROP TABLE albums');
        $this->addSql('DROP TABLE albums_categorie');
        $this->addSql('DROP TABLE artistes');
        $this->addSql('DROP TABLE artistes_albums');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE username username VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
