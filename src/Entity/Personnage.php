<?php

namespace App\Entity;

use App\Repository\PersonnageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonnageRepository::class)
 */
class Personnage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $health;

    /**
     * @ORM\Column(type="integer")
     */
    private $strength;

    /**
     * @ORM\Column(type="integer")
     */
    private $shield;

    /**
     * @ORM\Column(type="integer")
     */
    private $agilite;

    /**
     * @ORM\Column(type="integer")
     */
    private $levels;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setHealth(int $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getShield(): ?int
    {
        return $this->shield;
    }

    public function setShield(int $shield): self
    {
        $this->shield = $shield;

        return $this;
    }

    public function getAgilite(): ?int
    {
        return $this->agilite;
    }

    public function setAgilite(int $agilite): self
    {
        $this->agilite = $agilite;

        return $this;
    }

    public function getLevels(): ?int
    {
        return $this->levels;
    }

    public function setLevels(int $levels): self
    {
        $this->levels = $levels;

        return $this;
    }
}
