<?php

namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class TribeAdmin
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class TribeAdmin extends Model
{
    /**
     * @var string
     */
    protected $field = 'tribeAdmin';

    /**
     * @var
     */
    protected $tribeSlug;

    /**
     * @var
     */
    protected $firstName;

    /**
     * @var
     */
    protected $lastName;

    /**
     * @var
     */
    protected $email;

    /**
     * Get the instance as an array.
     *
     * @return mixed
     */
    public function toArray()
    {
        return [
            'batch_id' => $this->batchId,
            'first_name' => $this->firstName,
            'tribe_slug' => $this->tribeSlug,
            'last_name' => $this->lastName,
            'email' => $this->email,
        ];
    }
}