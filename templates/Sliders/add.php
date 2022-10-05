<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slider $slider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sliders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sliders form content">
            <?= $this->Form->create($slider) ?>
            <fieldset>
                <legend><?= __('Add Slider') ?></legend>
                <?php
                    echo $this->Form->control('img');
                    echo $this->Form->control('category');
                    echo $this->Form->control('link');
                    echo $this->Form->control('title');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('is_active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
