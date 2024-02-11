<?php

namespace App\Entity;

use App\Repository\ChatTigréRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ChatTigréRepository::class)]
#[Broadcast]
class ChatTigré
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $mignonneté = null;

    #[ORM\Column(nullable: true)]
    private ?int $taille = null;

    #[ORM\Column(nullable: true)]
    private ?int $moustacheLength = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMignonneté(): ?string
    {
        return $this->mignonneté;
    }

    public function setMignonneté(?string $mignonneté): static
    {
        $this->mignonneté = $mignonneté;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(?int $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getMoustacheLength(): ?int
    {
        return $this->moustacheLength;
    }

    public function setMoustacheLength(?int $moustacheLength): static
    {
        $this->moustacheLength = $moustacheLength;

        return $this;
    }
}
