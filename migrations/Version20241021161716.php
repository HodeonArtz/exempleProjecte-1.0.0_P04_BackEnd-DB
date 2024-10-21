<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241021161716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE allergy (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nurse (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, clinic_number VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, second_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, birthday_date DATE NOT NULL, telephone_num INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient_allergy (patient_id INT NOT NULL, allergy_id INT NOT NULL, INDEX IDX_96D2175E6B899279 (patient_id), INDEX IDX_96D2175EDBFD579D (allergy_id), PRIMARY KEY(patient_id, allergy_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE record (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, nurse_id INT NOT NULL, date DATE NOT NULL, weight_kg DOUBLE PRECISION NOT NULL, height_cm INT NOT NULL, diet VARCHAR(255) NOT NULL, oxygen INT DEFAULT NULL, norton_index INT DEFAULT NULL, dependency_level INT DEFAULT NULL, INDEX IDX_9B349F916B899279 (patient_id), INDEX IDX_9B349F917373BFAA (nurse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vitals_records (id INT AUTO_INCREMENT NOT NULL, record_id INT NOT NULL, shift VARCHAR(10) NOT NULL, breathing INT NOT NULL, artherial_tension INT NOT NULL, pulse INT NOT NULL, temperature INT NOT NULL, saline_solution_percentatge DOUBLE PRECISION NOT NULL, transfusions INT NOT NULL, intake INT NOT NULL, diuresis INT NOT NULL, vomit VARCHAR(255) DEFAULT NULL, sweating INT DEFAULT NULL, expectoration INT DEFAULT NULL, depositions INT DEFAULT NULL, drainage_a INT DEFAULT NULL, drainage_b INT DEFAULT NULL, drainage_c INT DEFAULT NULL, INDEX IDX_7364DF4D4DFD750C (record_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE patient_allergy ADD CONSTRAINT FK_96D2175E6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient_allergy ADD CONSTRAINT FK_96D2175EDBFD579D FOREIGN KEY (allergy_id) REFERENCES allergy (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE record ADD CONSTRAINT FK_9B349F916B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE record ADD CONSTRAINT FK_9B349F917373BFAA FOREIGN KEY (nurse_id) REFERENCES nurse (id)');
        $this->addSql('ALTER TABLE vitals_records ADD CONSTRAINT FK_7364DF4D4DFD750C FOREIGN KEY (record_id) REFERENCES record (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient_allergy DROP FOREIGN KEY FK_96D2175E6B899279');
        $this->addSql('ALTER TABLE patient_allergy DROP FOREIGN KEY FK_96D2175EDBFD579D');
        $this->addSql('ALTER TABLE record DROP FOREIGN KEY FK_9B349F916B899279');
        $this->addSql('ALTER TABLE record DROP FOREIGN KEY FK_9B349F917373BFAA');
        $this->addSql('ALTER TABLE vitals_records DROP FOREIGN KEY FK_7364DF4D4DFD750C');
        $this->addSql('DROP TABLE allergy');
        $this->addSql('DROP TABLE nurse');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE patient_allergy');
        $this->addSql('DROP TABLE record');
        $this->addSql('DROP TABLE vitals_records');
    }
}
