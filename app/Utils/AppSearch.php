<?php
// +--------------------------------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +--------------------------------------------------------------------------------------------
// | Company: Lem | User: Jingyou Chen  |  Email:chenjingyou@long.tv  | Time:2020/8/28 11:29
// +--------------------------------------------------------------------------------------------
// | TITLE: what's todo?
// +--------------------------------------------------------------------------------------------

namespace App\Utils;


use Elastic\AppSearch\Client\ClientBuilder;

Class AppSearch
{
    protected $host = [];

    protected $client = null;

    public function __construct()
    {
        $client = new ClientBuilder();
        $client->setHost(
            env('APP_SEARCH_HOSTNAME') . ':' . env('APP_SEARCH_PORT')
        )->setApiKey(env('APP_SEARCH_PRIVATE_KEY'));

        $this->client = $client->build();
    }

    public function search($title, $searchParams)
    {
        return $this->client->search(env('APP_SEARCH_ENGINE'), $title, $searchParams);
    }

    public function multiSearch($searchParams)
    {
        return $this->client->multiSearch(env('APP_SEARCH_ENGINE'), $searchParams);
    }

    public function updateDocuments($documents)
    {
        return $this->client->updateDocuments(env('APP_SEARCH_ENGINE'), $documents);
    }

    public function deleteDocuments($documents)
    {
        return $this->client->deleteDocuments(env('APP_SEARCH_ENGINE'), $documents);
    }

    public function indexDocuments($documents)
    {
        return $this->client->indexDocuments(env('APP_SEARCH_ENGINE'), $documents);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return call_user_func_array([$this->client, $name], $arguments);
    }
}
