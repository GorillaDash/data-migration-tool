<?php

namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class TribeTeamMember
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class TribeTeamMember extends Model
{
    /**
     * @var string
     */
    protected $field = 'teamMember';

    /**
     * @var string
     */
    protected $tribeSlug;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $role;
    /**
     * @var string
     */
    protected $about;

    /**
     * @var string
     */
    protected $avatar;

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
            'role' => $this->role,
            'about' => $this->about,
            'avatar' => $this->avatar,
        ];
    }
}