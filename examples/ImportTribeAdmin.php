<?php
require __DIR__.'/../vendor/autoload.php';

use GorillaDash\DataMigrationTool\Client;
use GorillaDash\DataMigrationTool\Models\TribeAdmin;
use GorillaDash\DataMigrationTool\Models\TribeTeamMember;
use GuzzleHttp\Exception\GuzzleException;

$client = new Client('__PUT_YOUR_ORGANISATION_KEY__', '__PUT_YOUR_ORGANISATION_SECRET__');

$member = new TribeAdmin([
    'batch_id' => 'TEST_BATCH',
    'tribe_slug' => 'Test-Tribe-11',
    'first_name' => 'first_name',
    'last_name' => 'last_name',
    'email' => 'casper@gorilladash.com',
]);

try {
    $response = $client->request($member);
} catch (GuzzleException $ex) {
    die($ex->getMessage());
}
