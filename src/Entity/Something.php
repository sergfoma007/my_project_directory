<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SomethingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SomethingRepository::class)]
#[ApiResource]
class Something
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Something = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSomething(): ?string
    {
        return $this->Something;
    }

    public function setSomething(string $Something): static
    {
        $this->Something = $Something;

        return $this;
    }
}
