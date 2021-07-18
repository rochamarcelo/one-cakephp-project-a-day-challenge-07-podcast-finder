<?php
declare(strict_types=1);

namespace App\Controller;

use App\Webservice\ItunesPodcastFake;

/**
 * Podcasts Controller
 *
 */
class PodcastsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $term = $this->request->getQuery('term');
        if (empty($term)) {
            $podcastData = ['results' => []];
        } else {
            $podcastData = (new ItunesPodcastFake())->search($term);
        }
        $this->set(compact('podcastData'));
    }
}
