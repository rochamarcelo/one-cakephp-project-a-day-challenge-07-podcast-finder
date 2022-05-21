<?php
/**
 * @var string $turboFrameId
 * @var \App\View\AppView $this
 */
?>
<turbo-frame id="<?= h($turboFrameId)?>">
    <?= $this->fetch('content') ?>
</turbo-frame>
