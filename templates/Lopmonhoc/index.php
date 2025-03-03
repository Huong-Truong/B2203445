<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lopmonhoc> $lopmonhoc
 */
?>
<div class="lopmonhoc index content">
    <?= $this->Html->link(__('New Lopmonhoc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lopmonhoc') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('monhoc_id') ?></th>
                    <th><?= $this->Paginator->sort('hocki_nk') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lopmonhoc as $lopmonhoc): ?>
                <tr>
                    <td><?= $this->Number->format($lopmonhoc->id) ?></td>
                    <td><?= $this->Number->format($lopmonhoc->monhoc_id) ?></td>
                    <td><?= h($lopmonhoc->hocki_nk) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lopmonhoc->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lopmonhoc->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lopmonhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lopmonhoc->id)]) ?>
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