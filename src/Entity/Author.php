<?php

namespace App\Entity;

use App\Repository\AuthorRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $name = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $postName = null;

    #[ORM\Column(length: 30)]
    private ?string $firstName = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $bornAt = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $borIn = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $deadAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPostName(): ?string
    {
        return $this->postName;
    }

    public function setPostName(?string $postName): static
    {
        $this->postName = $postName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getBornAt(): ?\DateTimeImmutable
    {
        return $this->bornAt;
    }

    public function setBornAt(?\DateTimeImmutable $bornAt): static
    {
        $this->bornAt = $bornAt;

        return $this;
    }

    public function getBorIn(): ?string
    {
        return $this->borIn;
    }

    public function setBorIn(?string $borIn): static
    {
        $this->borIn = $borIn;

        return $this;
    }

    public function getDeadAt(): ?\DateTimeImmutable
    {
        return $this->deadAt;
    }

    public function setDeadAt(?\DateTimeImmutable $deadAt): static
    {
        $this->deadAt = $deadAt;

        return $this;
    }
}
