<?php

namespace App\Entity;

use App\Repository\ProductDataRepository;
use App\Entity\ProductBundles;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToMany(targetEntity=ProductBundles::class)
     * @ORM\JoinTable(name="product_to_product_bundle",
     *      joinColumns={@ORM\JoinColumn(name="product_data_id", referencedColumnName="product_data_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="product_bundles_id", referencedColumnName="product_bundles_id")}
     * )
     */
    private $productBundles;

    public function __construct()
    {
        $this->productBundles = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, ProductBundles>
     */
    public function getProductBundles(): Collection
    {
        return $this->productBundles;
    }

    public function addProductBundle(ProductBundles $bundle): self
    {
        if (!$this->productBundles->contains($bundle)) {
            $this->productBundles[] = $bundle;
        }

        return $this;
    }

    public function removeProductBundle(ProductBundles $bundle): self
    {
        $this->productBundles->removeElement($bundle);

        return $this;
    }
    
    public function getBundledProducts(): Collection
    {
        $currentId = $this->getId();
        return $this->productBundles->last()->getProductData()->filter(
            function($entry) use ($currentId) {
               return $currentId != $entry->getId();
            }
        );
    }
}
