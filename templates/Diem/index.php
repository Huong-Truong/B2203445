<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Diem> $diem
 */
?>
<div class="diem index content">
    <?= $this->Html->link(__('New Diem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Diem') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('lopmonhoc_id') ?></th>
                    <th><?= $this->Paginator->sort('sinhvien_id') ?></th>
                    <th><?= $this->Paginator->sort('diem') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diem as $diem): ?>
                <tr>
                    <td><?= $diem->hasValue('lopmonhoc') ? $this->Html->link($diem->lopmonhoc->hocki_nk, ['controller' => 'Lopmonhoc', 'action' => 'view', $diem->lopmonhoc->id]) : '' ?></td>
                    <td><?= $diem->hasValue('sinhvien') ? $this->Html->link($diem->sinhvien->hoten_sv, ['controller' => 'Sinhvien', 'action' => 'view', $diem->sinhvien->id]) : '' ?></td>
                    <td><?= h($diem->diem) ?></td>
                    <td><?= $this->Number->format($diem->id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $diem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->id)]) ?>
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
