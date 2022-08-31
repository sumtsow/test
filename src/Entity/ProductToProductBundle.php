<?php

namespace App\Entity;

use App\Repository\ProductToProductBundleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductToProductBundleRepository::class)
 */
class ProductToProductBundle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $product_to_product_bundles_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_data_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_bundles_id;

    public function getId(): ?int
    {
        return $this->getProductToProductBundlesId();
    }

    public function getProductToProductBundlesId(): ?int
    {
        return $this->product_to_product_bundles_id;
    }

    public function getProductDataId(): ?int
    {
        return $this->product_data_id;
    }

    public function setProductDataId(int $product_data_id): self
    {
        $this->product_data_id = $product_data_id;

        return $this;
    }

    public function getProductBundlesId(): ?int
    {
        return $this->product_bundles_id;
    }

    public function setProductBundlesId(int $product_bundles_id): self
    {
        $this->product_bundles_id = $product_bundles_id;

        return $this;
    }
}
