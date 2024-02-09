<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303180635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE albums_artistes (albums_id INT NOT NULL, artistes_id INT NOT NULL, INDEX IDX_EB7E3A4CECBB55AF (albums_id), INDEX IDX_EB7E3A4C96E1EAF4 (artistes_id), PRIMARY KEY(albums_id, artistes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE albums_artistes ADD CONSTRAINT FK_EB7E3A4CECBB55AF FOREIGN KEY (albums_id) REFERENCES albums (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE albums_artistes ADD CONSTRAINT FK_EB7E3A4C96E1EAF4 FOREIGN KEY (artistes_id) REFERENCES artistes (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE artistes_albums');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artistes_albums (artistes_id INT NOT NULL, albums_id INT NOT NULL, INDEX IDX_D45596B596E1EAF4 (artistes_id), INDEX IDX_D45596B5ECBB55AF (albums_id), PRIMARY KEY(artistes_id, albums_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE artistes_albums ADD CONSTRAINT FK_D45596B596E1EAF4 FOREIGN KEY (artistes_id) REFERENCES artistes (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artistes_albums ADD CONSTRAINT FK_D45596B5ECBB55AF FOREIGN KEY (albums_id) REFERENCES albums (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE albums_artistes');
        $this->addSql('ALTER TABLE albums CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pochette pochette VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE spotify spotify VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE artistes CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE username username VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
