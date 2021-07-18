<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Action\Podcasts\Find;

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
        $podcastData = (new Find())->execute($term);

        $this->set(compact('podcastData'));
    }
}
