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
            <?= $this->Html->link(__('Edit Ban'), ['action' => 'edit', $ban->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ban'), ['action' => 'delete', $ban->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ban->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ban'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ban'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ban view content">
            <h3><?= h($ban->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Adress') ?></th>
                    <td><?= h($ban->adress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ban->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
