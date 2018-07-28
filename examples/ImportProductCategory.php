<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\ProductCategory;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$media = new ProductCategory([
    'batch_id' => 'TEST-BATCH-ID',
    'name' => 'string',
    'slug' => 'string',
    'status' => 'Active', // Active, Paused
    'menu_label' => 'string',
    'heading' => 'string',
    // ==== above required =====
    // thumbnail, banner, square, rectangle, Gallery
    'media' => [
        'banner' => [
            // 1 media in 1 array.
            'https://www.sample-videos.com/img/Sample-jpg-image-100kb.jpg'
        ],
        'gallery' => [
            'https://www.sample-videos.com/img/Sample-jpg-image-100kb.jpg',
            'https://www.sample-videos.com/img/Sample-jpg-image-200kb.jpg',
        ],
    ],
    'sub_heading' => 'string',
    'caption' => 'string',
    'description' => 'string',
    'page_heading' => 'string',
    'page_subheading' => 'string',
    'overwrite' => false,
]);

try {
    $response = $client->request($media);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
