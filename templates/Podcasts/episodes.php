<?php
/**
 * @var \App\View\AppView $this
 * @var array $episodes
 */
?>

<?php foreach ($episodes as $episode):?>
<div>
    <small><?= $episode['pub_date']->format('M d, Y')?></small><br />
    <strong><?= h($episode['title'])?></strong><br/>
    <small><?= h($episode['description'])?></small><br/>
    <?= $this->Html->link(
        __('Play Now'),
        $episode['url']
    )?>
    <hr/>
</div>
<?php endforeach;?>
