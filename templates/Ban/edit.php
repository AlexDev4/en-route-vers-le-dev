<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ban $ban
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ban->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ban->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ban'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ban form content">
            <?= $this->Form->create($ban) ?>
            <fieldset>
                <legend><?= __('Edit Ban') ?></legend>
                <?php
                    echo $this->Form->control('adress');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
