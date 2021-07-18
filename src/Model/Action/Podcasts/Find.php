<?php


namespace App\Model\Action\Podcasts;


use App\Webservice\ItunesPodcastFake;

class Find
{
    /**
     * @param string $term
     * @return array|mixed
     */
    public function execute(string $term)
    {
        if (empty($term)) {
            return ['results' => []];
        }

        return (new ItunesPodcastFake())->search($term);
    }
}
