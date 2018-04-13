<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\Media;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$media = new Media([
    'batch_id' => 'TEST-BATCH-ID',
    'image_url' => 'https://gorilladash.com/images/notification-icon.png',
    'media_name' => 'Media Migration Test',
    // If you have tribe/product slug and also can setup.
    // If you didn't know the tribe/product slug but you have name, also can use tribe/product name.
    // 'tribe_slug' => '',
    // 'tribe_name' => '',
    // 'product_slug' => '',
    // 'product_name' => '',
    'share' => false,
    'description' => 'Media Migration Test Description',
    'industry' => 'Test',
]);

try {
    $response = $client->request($media);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
