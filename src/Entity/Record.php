<?php

namespace App\Entity;

use App\Repository\RecordRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecordRepository::class)]
class Record
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $weightKg = null;

    #[ORM\Column]
    private ?int $heightCm = null;

    #[ORM\Column(length: 255)]
    private ?string $diet = null;

    #[ORM\Column(nullable: true)]
    private ?int $oxygen = null;

    #[ORM\Column(nullable: true)]
    private ?int $nortonIndex = null;

    #[ORM\Column(nullable: true)]
    private ?int $dependencyLevel = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Nurse $nurse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getWeightKg(): ?float
    {
        return $this->weightKg;
    }

    public function setWeightKg(float $weightKg): static
    {
        $this->weightKg = $weightKg;

        return $this;
    }

    public function getHeightCm(): ?int
    {
        return $this->heightCm;
    }

    public function setHeightCm(int $heightCm): static
    {
        $this->heightCm = $heightCm;

        return $this;
    }

    public function getDiet(): ?string
    {
        return $this->diet;
    }

    public function setDiet(string $diet): static
    {
        $this->diet = $diet;

        return $this;
    }

    public function getOxygen(): ?int
    {
        return $this->oxygen;
    }

    public function setOxygen(?int $oxygen): static
    {
        $this->oxygen = $oxygen;

        return $this;
    }

    public function getNortonIndex(): ?int
    {
        return $this->nortonIndex;
    }

    public function setNortonIndex(?int $nortonIndex): static
    {
        $this->nortonIndex = $nortonIndex;

        return $this;
    }

    public function getDependencyLevel(): ?int
    {
        return $this->dependencyLevel;
    }

    public function setDependencyLevel(?int $dependencyLevel): static
    {
        $this->dependencyLevel = $dependencyLevel;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): static
    {
        $this->patient = $patient;

        return $this;
    }

    public function getNurse(): ?Nurse
    {
        return $this->nurse;
    }

    public function setNurse(?Nurse $nurse): static
    {
        $this->nurse = $nurse;

        return $this;
    }
}
