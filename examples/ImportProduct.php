<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\Product;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$product = new Product([
    'batch_id' => 'TEST-BATCH-ID',
    'name' => 'string',
    'slug' => 'string',
    'status' => 'Active', // Active, Paused
    'menu_label' => 'string',
    'heading' => 'string',
    // ==== above required =====
    // thumbnail, banner, square, rectangle, Gallery, main
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
    'update' => false,
    'product_categories' => [
        'boat-signage',
        'company-signage',
        'product_category_slug_3',
    ],
    'product_ranges' => [
        'product_range_slug_1',
        'product_range_slug_2',
        'product_range_slug_3',
    ],
    'features' => [
        'features_1',
        'features_2',
        'features_3',
    ],
    'product_type' => 'Product',
    'custom_data' => [
        [
            'name' => 'Frequently Asked Questions',
            'value' => [
                ['name' => 'Question 1', 'value' => 'answer'],
                ['name' => 'Question 2', 'value' => 'answer'],
                ['name' => 'Question 3', 'value' => 'answer'],
            ],
        ],
        [
            'name' => 'Story 1 Heading',
            'value' => 'Product Heading'
        ]
    ],
//    'meta' => [],
//    'keyword' => [],
//    'tags' => [],
//    'materials' => [],
//    'minimum_quantity' => 1,
]);

try {
    $response = $client->request($product);
    var_dump($response);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
