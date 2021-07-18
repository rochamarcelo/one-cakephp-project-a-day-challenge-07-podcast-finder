<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Action\Episodes\ReadFeed;
use App\Model\Action\Podcasts\Find;

/**
 * Podcasts Controller
 * @property \App\Model\Table\PodcastsTable $Podcasts
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
        $podcastData = (new Find())->execute($term);

        $this->set(compact('podcastData'));
    }

    /**
     * @param string|null $id Podcast id
     */
    public function episodes(string $id = null)
    {
        $podcast = $this->Podcasts->get($id);
        $episodes = (new ReadFeed())->execute($podcast->feed_url);

        $this->set(compact('episodes', 'podcast'));
    }
}
