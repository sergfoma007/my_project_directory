<?php

namespace App\Entity;
namespace App\Handler;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PostRequestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRequestRepository::class)]
#[ApiResource]
class PostRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    MonologConfig;
}
