<?php
/**
 * @var \App\View\AppView $this
 * @var array $podcastData
 */
?>
<?= $this->Form->create(null, ['type' => 'get'])?>
<?= $this->Form->control('term')?>
<?= $this->Form->submit(__('Find Now'))?>
<?= $this->Form->end()?>
<?php foreach ($podcastData['results'] as $podcast):?>
<div>
    <table>
        <tr>
            <td><?= $this->Html->image($podcast['artworkUrl100'])?></td>
            <td>
                <strong><?= h($podcast['collectionName'])?></strong><br/>
                <small><?= h($podcast['artistName'])?></small>
            </td>
        </tr>
    </table>
    <hr/>
</div>
<?php endforeach;?>
