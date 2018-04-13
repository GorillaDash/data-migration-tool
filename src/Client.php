<?php
namespace GorillaDash\DataMigrationTool;

use GorillaDash\DataMigrationTool\Models\Model;
use GuzzleHttp\Client as HttpClient;

/**
 * Class Client
 *
 * @package GorillaDash\DataMigrationTool
 */
class Client
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * Http Client Config
     *
     * @var array
     */
    private $config = array(
        'base_uri' =>  'https://api.gorilladash.com',
        'headers' => array(
            'X-Requested-With' => 'XMLHttpRequest',
        ),
    );

    /**
     * Endpoint
     *
     * @var string
     */
    private $endpoint = '/graphql/api-data';

    /**
     * Client construct
     *
     * Need to setup the GorillaDash Organisation Key/secret.
     * You can get those information from Organisation Setting / Connections in GorillaDash platform.
     *
     * @param string $key GorillaDash Organisation Key
     * @param string $secret GorillaDash Organisation Secret
     */
    public function __construct($key, $secret)
    {
        $this->setAuth($key, $secret);
        $this->client = new HttpClient($this->config);
    }

    /**
     * Set Auth information
     *
     * @param $key
     * @param $secret
     */
    private function setAuth($key, $secret)
    {
        $this->config['headers']['GorillaDash-Api-Key'] = $key;
        $this->config['headers']['GorillaDash-Api-Secret'] = $secret;
    }

    /**
     * Request graphQL
     *
     * @param Model $model
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(Model $model)
    {
        $response = $this->client->request('POST', $this->endpoint, array(
            'json' => array(
                'query' => $model->toQuery(),
            )
        ));

        return json_decode($response->getBody()->getContents(), 1);
    }
}
