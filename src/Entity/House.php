<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Odm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Serializer\Filter\PropertyFilter;
use App\Repository\HouseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

#[ORM\Entity(repositoryClass: HouseRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['read']],
    denormalizationContext: ['group' => ['write']],
    paginationItemsPerPage: 10
),
ApiFilter(
    \ApiPlatform\Doctrine\Orm\Filter\SearchFilter::class,
    properties: [
        'property_id' => SearchFilter::STRATEGY_PARTIAL,
        'description' => SearchFilter::STRATEGY_PARTIAL
    ]
),
ApiFilter(
    RangeFilter::class, properties: ['rent']
),
ApiFilter(
    PropertyFilter::class
)]
class House
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read'])]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Groups(['read', 'write'])]
    #[NotBlank(),
        Length(
        min: 2,
        max: 50,
        maxMessage: "This property_id is too long"
    )]
    private ?string $property_id = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?int $area = null;

    #[ORM\Column(length: 200)]
    #[Groups(['read', 'write'])]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $cover_img_url = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $furnish = null;

    #[ORM\Column]
    #[Groups(['read'])]
    private ?float $latitude = null;

    #[ORM\Column]
    #[Groups(['read'])]
    private ?float $longitude = null;

    #[ORM\Column(length: 8)]
    #[Groups(['read'])]
    private ?string $postal_code = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $property_type = null;

    #[ORM\Column(length: 100)]
    #[Groups(['read', 'write'])]
    private ?string $availability = null;

    #[ORM\Column]
    private ?int $rent = null;

    #[ORM\Column]
    #[Groups(['read', 'write'])]
    private ?int $deposit = null;

    #[ORM\Column]
    private ?int $total_cost = null;

    #[ORM\Column(nullable: true)]
    private ?float $cost_sqm = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read', 'write'])]
    private ?string $title = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $gender = null;

    #[ORM\Column]
    #[Groups(['read', 'write'])]
    private ?bool $is_room_active = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read', 'write'])]
    private ?string $page_title = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['read', 'write'])]
    private ?int $roommates = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['read', 'write'])]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'Houses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['read', 'write'])]

    private ?User $owner = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCoverImgUrl(): ?string
    {
        return $this->cover_img_url;
    }

    public function setCoverImgUrl(?string $cover_img_url): self
    {
        $this->cover_img_url = $cover_img_url;

        return $this;
    }

    public function getFurnish(): ?string
    {
        return $this->furnish;
    }

    public function setFurnish(?string $furnish): self
    {
        $this->furnish = $furnish;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getPropertyType(): ?string
    {
        return $this->property_type;
    }

    public function setPropertyType(?string $property_type): self
    {
        $this->property_type = $property_type;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(string $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getRent(): ?int
    {
        return $this->rent;
    }

    public function setRent(int $rent): self
    {
        $this->rent = $rent;

        return $this;
    }

    public function getDeposit(): ?int
    {
        return $this->deposit;
    }

    public function setDeposit(int $deposit): self
    {
        $this->deposit = $deposit;

        return $this;
    }

    public function getTotalCost(): ?int
    {
        return $this->total_cost;
    }

    public function setTotalCost(int $total_cost): self
    {
        $this->total_cost = $total_cost;

        return $this;
    }

    public function getCostSqm(): ?float
    {
        return $this->cost_sqm;
    }

    public function setCostSqm(?float $cost_sqm): self
    {
        $this->cost_sqm = $cost_sqm;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function isIsRoomActive(): ?bool
    {
        return $this->is_room_active;
    }

    public function setIsRoomActive(bool $is_room_active): self
    {
        $this->is_room_active = $is_room_active;

        return $this;
    }

    public function getPageTitle(): ?string
    {
        return $this->page_title;
    }

    public function setPageTitle(string $page_title): self
    {
        $this->page_title = $page_title;

        return $this;
    }

    public function getRoommates(): ?int
    {
        return $this->roommates;
    }

    public function setRoommates(?int $roommates): self
    {
        $this->roommates = $roommates;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    #[Groups(['read'])]
    public function getShortDescription(): ?string {
        if (strlen($this->description)<40){
            return $this->description;
        }
        return substr($this->description,0,40)."...";
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}
