<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\Tribe;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$tribe = new Tribe([
    'batch_id' => 'TEST_BATCH',
    'name' => 'Test-Tribe',
    'slug' => 'Test-Tribe-10',
    'tribe_type_names' => [
        'Type 1',
        'New Type',
    ],
    'status' => 'Active',
    'country' => 'Australia',
    'postal_code' => 2830,
    'state' => 'NSW',
    'locality' => 'Dubbo',
    'address_1' => 'XXX Darling Street',
    'address_2' => '',
    'use_organisation_address' => false,
    'heading' => 'heading',
    'sub_heading' => 'sub_heading',
    'caption' => 'caption',
    'page_heading' => 'page_heading',
    'page_sub_heading' => 'page_sub_heading',
    'introduction_bold' => 'introduction_bold',
    'introduction' => 'introduction',
    'main_telephone' => 'main_telephone',
    'main_notification' => 'main_notification',
    'public_email' => 'public_email',
    'tracking_code' => 'tracking_code',
    'answer_number' => 'answer_number',
    'organic_number' => 'organic_number',
    'paid_number' => 'paid_number',
    'about_us' => 'about_us',
    'introduction_team' => 'introduction_team',
    'google_place_id' => 'google_place_id',
    'facebook_review_link' => 'facebook_review_link',
    'facebook_pixel_id' => 'facebook_pixel_id',
    'opening_hours_message' => 'opening_hours_message',
    'show_opening_hours' => true,
    'open_hours' => [
        [
            'day' => 'Monday',
            'open' => '9:00am',
            'close' => '6:00pm',
        ],
        [
            'day' => 'Tuesday',
            'open' => '9:00am',
            'close' => '6:00pm',
        ],
        [
            'day' => 'Holiday',
            'open' => '9:00am',
            'close' => '6:00pm',
        ],
    ],
    'latitude' => 48.80013500,
    'longitude' => 2.12356670,
    // thumbnail, banner, square, Gallery, main, team
    'media' => [
        'team' => [
            'https://www.sample-videos.com/img/Sample-jpg-image-100kb.jpg',
            'https://www.sample-videos.com/img/Sample-jpg-image-200kb.jpg',
        ],
        'gallery' => [
            'https://www.sample-videos.com/img/Sample-jpg-image-100kb.jpg',
            'https://www.sample-videos.com/img/Sample-jpg-image-200kb.jpg',
        ],
    ],
]);

try {
    $response = $client->request($tribe);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
