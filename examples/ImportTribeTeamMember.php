<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\TribeTeamMember;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$member = new TribeTeamMember([
    'batch_id' => 'TEST_BATCH',
    'tribe_slug' => 'Test-Tribe-11',
    'first_name' => 'first_name',
    'last_name' => 'last_name',
    'email' => 'casper@gorilladash.com',
    'role' => 'role',
    'about' => 'about',
    'avatar' => 'https://cloud.gorilladash.com/6302/fully-promoted-australia-promotional-floor-mats-original-5a988eb3acd74.jpg',
]);

try {
    $response = $client->request($member);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
