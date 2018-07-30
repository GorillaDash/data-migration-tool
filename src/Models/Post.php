<?php

namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class Post
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class Post extends Model
{

    /**
     * Set GraphQL mutation field name
     *
     * @var string
     */
    protected $field = 'post';

    /**
     * @var
     */
    protected $status = 'Published';
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
    protected $author;

    /**
     * @var
     */
    protected $article;
    /**
     * @var
     */
    protected $tribeSlug;
    /**
     * @var
     */
    protected $createdAt;

    /**
     * @var
     */
    protected $media;

    /**
     * @var string
     */
    protected $queueStatus = 'Published';


    /**
     * Get the instance as an array.
     *
     * @return mixed
     */
    public function toArray()
    {
        $data = [
            'batch_id' => $this->batchId,
            'status' => $this->status,
            'slug' => $this->slug,
            'heading' => $this->heading,
            'sub_heading' => $this->subHeading,
            'article' => base64_encode($this->article),
            'author' => $this->author,
            'tribe_slug' => $this->tribeSlug,
            'media' => base64_encode(json_encode($this->media)),
            'queue_status' => $this->queueStatus,
            'created_at' => $this->createdAt,
        ];

        return $data;
    }
}