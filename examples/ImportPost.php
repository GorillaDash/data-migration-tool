<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\Post;
use GorillaDash\DataMigrationTool\Models\Product;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$product = new Post([
    'batch_id' => 'TEST-BATCH-ID',
    'slug' => 'string',
    'status' => 'Published', // Published
    'heading' => 'heading',
    'author' => 'author',
    // ==== above required =====
    // Gallery
    'media' => [
        'gallery' => [
            'https://www.sample-videos.com/img/Sample-jpg-image-100kb.jpg',
            'https://www.sample-videos.com/img/Sample-jpg-image-200kb.jpg',
        ],
    ],
    'sub_heading' => 'string',
    'tribe_slug' => 'bathurst',
    'queue_status' => 'Published', // Published / Draft
    'created_at' => '2018-07-30 23:59:59',
]);

try {
    $response = $client->request($product);
    var_dump($response);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
