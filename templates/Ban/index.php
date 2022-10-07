<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ban> $ban
 */
?>
<div class="ban index content">
    <?= $this->Html->link(__('New Ban'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ban') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('adress') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ban as $ban): ?>
                <tr>
                    <td><?= $this->Number->format($ban->id) ?></td>
                    <td><?= h($ban->adress) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ban->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ban->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ban->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ban->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
