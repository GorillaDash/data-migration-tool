<?php

namespace GorillaDash\DataMigrationTool\Models;

/**
 * Class Tribe
 *
 * @package GorillaDash\DataMigrationTool\Models
 */
class Tribe extends Model
{
    /**
     * Set GraphQL mutation field name
     *
     * @var string
     */
    protected $field = 'tribe';

    /**
     * @var
     */
    protected $name;
    /**
     * @var string
     */
    protected $slug;
    /**
     * @var array
     */
    protected $tribeTypeNames;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var int
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $locality;
    /**
     * @var string
     */
    protected $address1;
    /**
     * @var string
     */
    protected $address2;
    /**
     * @var string
     */
    protected $heading;
    /**
     * @var string
     */
    protected $subHeading;
    /**
     * @var string
     */
    protected $caption;
    /**
     * @var string
     */
    protected $pageHeading;
    /**
     * @var string
     */
    protected $pageSubHeading;
    /**
     * @var string
     */
    protected $introductionBold;
    /**
     * @var string
     */
    protected $introduction;
    /**
     * @var string
     */
    protected $mainTelephone;
    /**
     * @var string
     */
    protected $mainNotificationEmail;
    /**
     * @var string
     */
    protected $publicEmail;
    /**
     * @var string
     */
    protected $trackingCode;
    /**
     * @var string
     */
    protected $answerNumber;
    /**
     * @var string
     */
    protected $organicNumber;
    /**
     * @var string
     */
    protected $paidNumber;
    /**
     * @var string
     */
    protected $aboutUs;
    /**
     * @var string
     */
    protected $introductionTeam;
    /**
     * @var string
     */
    protected $googlePlaceId;
    /**
     * @var string
     */
    protected $facebookReviewLink;
    /**
     * @var string
     */
    protected $facebookPixelId;
    /**
     * @var string
     */
    protected $openingHoursMessage;
    /**
     * @var boolean
     */
    protected $showOpeningHours;
    /**
     * @var array
     */
    protected $openHours;

    /**
     * @var boolean
     */
    protected $useOrganisationAddress;

    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @var array
     */
    protected $media;

    /**
     * @var array
     */
    protected $content;

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
            'slug' => $this->slug,
            'tribe_type_names' => base64_encode(json_encode($this->tribeTypeNames)),
            'status' => $this->status,
            'country' => $this->country,
            'postal_code' => $this->postalCode,
            'state' => $this->state,
            'locality' => $this->locality,
            'address_1' => $this->address1,
            'address_2' => $this->address2,
            'heading' => base64_encode($this->heading),
            'sub_heading' => base64_encode($this->subHeading),
            'caption' => base64_encode($this->caption),
            'page_heading' => base64_encode($this->pageHeading),
            'page_sub_heading' => base64_encode($this->pageSubHeading),
            'introduction_bold' => base64_encode($this->introductionBold),
            'introduction' => base64_encode($this->introduction),
            'main_telephone' => $this->mainTelephone,
            'main_notification_email' => $this->mainNotificationEmail,
            'public_email' => $this->publicEmail,
            'tracking_code' => $this->trackingCode,
            'answer_number' => $this->answerNumber,
            'organic_number' => $this->organicNumber,
            'paid_number' => $this->paidNumber,
            'about_us' => base64_encode($this->aboutUs),
            'introduction_team' => base64_encode($this->introductionTeam),
            'google_place_id' => $this->googlePlaceId,
            'facebook_review_link' => $this->facebookReviewLink,
            'facebook_pixel_id' => $this->facebookPixelId,
            'opening_hours_message' => base64_encode($this->openingHoursMessage),
            'show_opening_hours' => $this->showOpeningHours,
            'open_hours' => base64_encode(json_encode($this->openHours)),
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'use_organisation_address' => $this->useOrganisationAddress,
            'media' => base64_encode(json_encode($this->media)),
            'content' => base64_encode(json_encode($this->content)),
        ];

        return $data;
    }
}