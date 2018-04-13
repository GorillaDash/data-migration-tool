<?php
namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class Media
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class Media extends Model
{
    /**
     * Set GraphQL mutation field name
     *
     * @var string
     */
    protected $field = 'media';

    /**
     * Batch ID
     *
     * @var string
     */
    protected $batchId;

    /**
     * Image Url
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * Media Name
     *
     * @var string
     */
    protected $mediaName;

    /**
     * Tribe Slug
     *
     * @var string
     */
    protected $tribeSlug;

    /**
     * Tribe Name
     *
     * @var string
     */
    protected $tribeName;

    /**
     * Product Slug
     *
     * @var string
     */
    protected $productSlug;

    /**
     * Product Name
     *
     * @var string
     */
    protected $productName;

    /**
     * Description
     *
     * @var string
     */
    protected $description;

    /**
     * Industry
     *
     * @var string
     */
    protected $industry;

    /**
     * Share with others stores
     *
     * @var boolean
     */
    protected $share;


    /**
     * Get the instance as an array.
     *
     * @return mixed
     */
    public function toArray()
    {
        $array = array(
            'batch_id' => $this->batchId,
            'media_name' => $this->mediaName,
            'image_url' => $this->imageUrl,
            'tribe_name' => $this->tribeName,
            'tribe_slug' => $this->tribeSlug,
            'product_name' => $this->productName,
            'product_slug' => $this->productSlug,
            'industry' => $this->industry,
            'share' => $this->share,
            'description' => $this->description,
        );
        return array_filter($array, function ($value) {
            return $value !== null && $value !== '';
        });
    }
}
