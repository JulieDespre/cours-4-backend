<?php

namespace App\Entity;

use App\Repository\ChatNoirBlancRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatNoirBlancRepository::class)]
class ChatNoirBlanc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $migoneté = null;

    #[ORM\Column]
    private ?int $taille = null;

    #[ORM\Column]
    private ?int $moustacheLenth = null;

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

    public function getMigoneté(): ?string
    {
        return $this->migoneté;
    }

    public function setMigoneté(string $migoneté): static
    {
        $this->migoneté = $migoneté;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getMoustacheLenth(): ?int
    {
        return $this->moustacheLenth;
    }

    public function setMoustacheLenth(int $moustacheLenth): static
    {
        $this->moustacheLenth = $moustacheLenth;

        return $this;
    }
}
