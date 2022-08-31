<?php

namespace App\Entity;

use App\Repository\ProductDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductDataRepository::class)
 */
class ProductData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $product_data_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_name;

    public function getId(): ?int
    {
        return $this->getProductDataId();
    }

    public function getProductDataId(): ?int
    {
        return $this->product_data_id;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }
}
