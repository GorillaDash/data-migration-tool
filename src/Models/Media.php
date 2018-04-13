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
     * @var string
     */
    protected $field = 'media';

    /**
     * @var string
     */
    protected $batchId;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var string
     */
    protected $mediaName;

    /**
     * @var string
     */
    protected $tribeSlug;

    /**
     * @var string
     */
    protected $tribeName;

    /**
     * @var string
     */
    protected $productSlug;

    /**
     * @var string
     */
    protected $productName;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $industry;

    /**
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
