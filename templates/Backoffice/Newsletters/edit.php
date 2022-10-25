<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newsletter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Newsletters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsletters form content">
            <?= $this->Form->create($newsletter) ?>
            <fieldset>
                <legend><?= __('Edit Newsletter') ?></legend>
                <?php
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
