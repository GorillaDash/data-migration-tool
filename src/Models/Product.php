<?php

namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class ProductCategory
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class Product extends Model
{

    /**
     * Set GraphQL mutation field name
     *
     * @var string
     */
    protected $field = 'product';

    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $menuLabel;
    /**
     * @var
     */
    protected $status;
    /**
     * @var
     */
    protected $slug;
    /**
     * @var
     */
    protected $heading;
    /**
     * @var
     */
    protected $subHeading;
    /**
     * @var
     */
    protected $caption;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $meta;
    /**
     * @var
     */
    protected $pageHeading;
    /**
     * @var
     */
    protected $pageSubheading;
    /**
     * @var
     */
    protected $media;
    /**
     * @var
     */
    protected $update;

    /**
     * @var
     */
    protected $productCategories;

    /**
     * @var
     */
    protected $productRanges;

    /**
     * @var
     */
    protected $features;
    /**
     * @var
     */
    protected $productType;
    /**
     * @var
     */
    protected $customData;

    /**
     * @var boolean
     */
    protected $shopActive = true;

    /**
     * @var
     */
    protected $keywords;

    /**
     * @var
     */
    protected $tags;

    /**
     * @var
     */
    protected $materials;

    /**
     * @var
     */
    protected $minimumQuantity;

    /**
     * Get the instance as an array.
     *
     * @return mixed
     */
    public function toArray()
    {
        $data = [
            'batch_id' => $this->batchId,
            'name' => $this->name,
            'menu_label' => $this->menuLabel,
            'status' => $this->status,
            'slug' => $this->slug,
            'heading' => $this->heading,
            'sub_heading' => $this->subHeading,
            'caption' => $this->caption,
            'description' => base64_encode($this->description),
            'page_heading' => $this->pageHeading,
            'page_subheading' => $this->pageSubheading,
            'media' => base64_encode(json_encode($this->media)),
            'update' => $this->update,
            'product_categories' => $this->productCategories,
            'product_ranges' => $this->productRanges,
            'features' => $this->features,
            'product_type' => $this->productType,
            'custom_data' => base64_encode(json_encode($this->customData)),
            'shop_active' => $this->shopActive,
            'keywords' => $this->keywords,

        ];
        if ($this->meta) {
            $data['meta'] = $this->meta;
        }

        if ($this->keywords) {
            $data['keywords'] = $this->keywords;
        }

        if ($this->tags) {
            $data['tags'] = $this->tags;
        }

        if ($this->materials) {
            $data['materials'] = $this->materials;
        }

        if ($this->minimumQuantity) {
            $data['minimum_quantity'] = $this->minimumQuantity;
        }

        return $data;
    }
}