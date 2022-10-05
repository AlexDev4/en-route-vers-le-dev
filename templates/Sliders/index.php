<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Slider> $sliders
 */
?>
<div class="sliders index content">
    <?= $this->Html->link(__('New Slider'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sliders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('img') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('link') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sliders as $slider): ?>
                <tr>
                    <td><?= $this->Number->format($slider->id) ?></td>
                    <td><?= h($slider->img) ?></td>
                    <td><?= h($slider->category) ?></td>
                    <td><?= h($slider->link) ?></td>
                    <td><?= h($slider->title) ?></td>
                    <td><?= h($slider->date) ?></td>
                    <td><?= h($slider->created) ?></td>
                    <td><?= h($slider->modified) ?></td>
                    <td><?= h($slider->is_active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $slider->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slider->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slider->id)]) ?>
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
