<?php

namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class ProductCategory
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class ProductCategory extends Model
{

    /**
     * Set GraphQL mutation field name
     *
     * @var string
     */
    protected $field = 'productCategory';

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
     * Get the instance as an array.
     *
     * @return mixed
     */
    public function toArray()
    {
        return [
            'batch_id' => $this->batchId,
            'name' => $this->name,
            'menu_label' => $this->menuLabel,
            'status' => $this->status,
            'slug' => $this->slug,
            'heading' => $this->heading,
            'sub_heading' => $this->subHeading,
            'caption' => $this->caption,
            'description' => $this->description,
            'meta' => $this->meta,
            'page_heading' => $this->pageHeading,
            'page_subheading' => $this->pageSubheading,
            'media' => base64_encode(json_encode($this->media)),
            'update' => $this->update,
        ];
    }
}