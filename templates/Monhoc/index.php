<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Monhoc> $monhoc
 */
?>
<div class="monhoc index content">
    <?= $this->Html->link(__('New Monhoc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monhoc') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ten_mon') ?></th>
                    <th><?= $this->Paginator->sort('so_tc') ?></th>
                    <th><?= $this->Paginator->sort('co_tinh_tl') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monhoc as $monhoc): ?>
                <tr>
                    <td><?= $this->Number->format($monhoc->id) ?></td>
                    <td><?= h($monhoc->ten_mon) ?></td>
                    <td><?= $this->Number->format($monhoc->so_tc) ?></td>
                    <td><?= h($monhoc->co_tinh_tl) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monhoc->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monhoc->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monhoc->id)]) ?>
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