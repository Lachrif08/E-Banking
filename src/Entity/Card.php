<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $num = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateexp = null;

    #[ORM\Column(nullable: true)]
    private ?int $cvv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(?string $num): static
    {
        $this->num = $num;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateexp(): ?\DateTimeInterface
    {
        return $this->dateexp;
    }

    public function setDateexp(\DateTimeInterface $dateexp): static
    {
        $this->dateexp = $dateexp;

        return $this;
    }

    public function getCvv(): ?int
    {
        return $this->cvv;
    }

    public function setCvv(?int $cvv): static
    {
        $this->cvv = $cvv;

        return $this;
    }
}
