<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['user:read']],
    denormalizationContext: ['group' => ['user:write']],
    paginationItemsPerPage: 10
),
UniqueEntity(fields: ['property_id'])]

class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Groups(['user:read', 'user:write'])]
    #[NotBlank]
    private ?string $user_name = null;

    #[Groups(['user:read'])]
    #[ORM\Column(length: 255)]
    private ?string $user_type = null;

    #[Groups(['user:read', 'user:write'])]
    #[NotBlank()]
    #[ORM\Column(length: 255, unique: true)]
    private ?string $property_id = null;

    #[Groups(['user:read', 'user:write'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo_url = null;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: House::class)]
    private Collection $Houses;

    public function __construct()
    {
        $this->Houses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }


    public function getUserType(): ?string
    {
        return $this->user_type;
    }

    public function setUserType(string $user_type): self
    {
        $this->user_type = $user_type;

        return $this;
    }

    public function getPropertyId(): ?string
    {
        return $this->property_id;
    }

    public function setPropertyId(string $property_id): self
    {
        $this->property_id = $property_id;

        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    public function setPhotoUrl(?string $photo_url): self
    {
        $this->photo_url = $photo_url;

        return $this;
    }

    /**
     * @return Collection<int, House>
     */
    public function getHouses(): Collection
    {
        return $this->Houses;
    }

    public function addHouse(House $house): self
    {
        if (!$this->Houses->contains($house)) {
            $this->Houses->add($house);
            $house->setOwner($this);
        }

        return $this;
    }

    public function removeHouse(House $house): self
    {
        if ($this->Houses->removeElement($house)) {
            // set the owning side to null (unless already changed)
            if ($house->getOwner() === $this) {
                $house->setOwner(null);
            }
        }

        return $this;
    }
}

