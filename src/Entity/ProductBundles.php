<?php

namespace App\Entity;

use App\Repository\ProductBundlesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductBundlesRepository::class)
 */
class ProductBundles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $product_bundles_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_bundles_discount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $product_bundles_created;

    /**
     * @ORM\Column(type="boolean")
     */
    private $product_bundles_is_active;

    /**
     * @ORM\Column(type="date")
     */
    private $product_bundles_start_date;

    /**
     * @ORM\Column(type="date")
     */
    private $product_bundles_end_date;

    public function getId(): ?int
    {
        return $this->getProductBundlesId();
    }

    public function getProductBundlesId(): ?int
    {
        return $this->product_bundles_id;
    }

    public function getProductBundlesDiscount(): ?int
    {
        return $this->product_bundles_discount;
    }

    public function setProductBundlesDiscount(int $product_bundles_discount): self
    {
        $this->product_bundles_discount = $product_bundles_discount;

        return $this;
    }

    public function getProductBundlesCreated(): ?\DateTimeInterface
    {
        return $this->product_bundles_created;
    }

    public function setProductBundlesCreated(\DateTimeInterface $product_bundles_created): self
    {
        $this->product_bundles_created = $product_bundles_created;

        return $this;
    }

    public function isProductBundlesIsActive(): ?bool
    {
        return $this->product_bundles_is_active;
    }

    public function setProductBundlesIsActive(bool $product_bundles_is_active): self
    {
        $this->product_bundles_is_active = $product_bundles_is_active;

        return $this;
    }

    public function getProductBundlesStartDate(): ?\DateTimeInterface
    {
        return $this->product_bundles_start_date;
    }

    public function setProductBundlesStartDate(\DateTimeInterface $product_bundles_start_date): self
    {
        $this->product_bundles_start_date = $product_bundles_start_date;

        return $this;
    }

    public function getProductBundlesEndDate(): ?\DateTimeInterface
    {
        return $this->product_bundles_end_date;
    }

    public function setProductBundlesEndDate(\DateTimeInterface $product_bundles_end_date): self
    {
        $this->product_bundles_end_date = $product_bundles_end_date;

        return $this;
    }
}
