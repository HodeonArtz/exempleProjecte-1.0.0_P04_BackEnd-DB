<?php

namespace App\Entity;

use App\Repository\VitalsRecordsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VitalsRecordsRepository::class)]
class VitalsRecords
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $shift = null;

    #[ORM\Column]
    private ?int $breathing = null;

    #[ORM\Column]
    private ?int $artherialTension = null;

    #[ORM\Column]
    private ?int $pulse = null;

    #[ORM\Column]
    private ?int $temperature = null;

    #[ORM\Column]
    private ?float $salineSolutionPercentatge = null;

    #[ORM\Column]
    private ?int $transfusions = null;

    #[ORM\Column]
    private ?int $intake = null;

    #[ORM\Column]
    private ?int $diuresis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vomit = null;

    #[ORM\Column(nullable: true)]
    private ?int $sweating = null;

    #[ORM\Column(nullable: true)]
    private ?int $expectoration = null;

    #[ORM\Column(nullable: true)]
    private ?int $depositions = null;

    #[ORM\Column(nullable: true)]
    private ?int $drainageA = null;

    #[ORM\Column(nullable: true)]
    private ?int $drainageB = null;
    
    #[ORM\Column(nullable: true)]
    private ?int $drainageC = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Record $record = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShift(): ?string
    {
        return $this->shift;
    }

    public function setShift(string $shift): static
    {
        $this->shift = $shift;

        return $this;
    }

    public function getBreathing(): ?int
    {
        return $this->breathing;
    }

    public function setBreathing(int $breathing): static
    {
        $this->breathing = $breathing;

        return $this;
    }

    public function getArtherialTension(): ?int
    {
        return $this->artherialTension;
    }

    public function setArtherialTension(int $artherialTension): static
    {
        $this->artherialTension = $artherialTension;

        return $this;
    }

    public function getPulse(): ?int
    {
        return $this->pulse;
    }

    public function setPulse(int $pulse): static
    {
        $this->pulse = $pulse;

        return $this;
    }

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(int $temperature): static
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getSalineSolutionPercentatge(): ?float
    {
        return $this->salineSolutionPercentatge;
    }

    public function setSalineSolutionPercentatge(float $salineSolutionPercentatge): static
    {
        $this->salineSolutionPercentatge = $salineSolutionPercentatge;

        return $this;
    }

    public function getTransfusions(): ?int
    {
        return $this->transfusions;
    }

    public function setTransfusions(int $transfusions): static
    {
        $this->transfusions = $transfusions;

        return $this;
    }

    public function getIntake(): ?int
    {
        return $this->intake;
    }

    public function setIntake(int $intake): static
    {
        $this->intake = $intake;

        return $this;
    }

    public function getDiuresis(): ?int
    {
        return $this->diuresis;
    }

    public function setDiuresis(int $diuresis): static
    {
        $this->diuresis = $diuresis;

        return $this;
    }

    public function getVomit(): ?string
    {
        return $this->vomit;
    }

    public function setVomit(?string $vomit): static
    {
        $this->vomit = $vomit;

        return $this;
    }

    public function getSweating(): ?int
    {
        return $this->sweating;
    }

    public function setSweating(?int $sweating): static
    {
        $this->sweating = $sweating;

        return $this;
    }

    public function getExpectoration(): ?int
    {
        return $this->expectoration;
    }

    public function setExpectoration(?int $expectoration): static
    {
        $this->expectoration = $expectoration;

        return $this;
    }

    public function getDepositions(): ?int
    {
        return $this->depositions;
    }

    public function setDepositions(?int $depositions): static
    {
        $this->depositions = $depositions;

        return $this;
    }

    public function getDrainageA(): ?int
    {
        return $this->drainageA;
    }

    public function setDrainageA(?int $drainageA): static
    {
        $this->drainageA = $drainageA;

        return $this;
    }
    public function getDrainageB(): ?int
    {
        return $this->drainageB;
    }

    public function setDrainageB(?int $drainageB): static
    {
        $this->drainageB = $drainageB;

        return $this;
    }
    public function getDrainageC(): ?int
    {
        return $this->drainageC;
    }

    public function setDrainageC(?int $drainageC): static
    {
        $this->drainageC = $drainageC;

        return $this;
    }

    public function getRecord(): ?Record
    {
        return $this->drainageC;
    }

    public function setRecord(?Record $record): static
    {
        $this->record = $record;
        return $this;
    }
}