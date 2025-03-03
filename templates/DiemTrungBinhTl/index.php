<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DiemTrungBinhTl> $diemTrungBinhTl
 */
?>
<div class="diemTrungBinhTl index content">
    <?= $this->Html->link(__('New Diem Trung Binh Tl'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Diem Trung Binh Tl') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('sinhvien_id') ?></th>
                    <th><?= $this->Paginator->sort('hoten_sv') ?></th>
                    <th><?= $this->Paginator->sort('diem_tich_luy') ?></th>
                    <th><?= $this->Paginator->sort('so_mon_da_hoc') ?></th>
                    <th><?= $this->Paginator->sort('so_mon_da_tich_luy') ?></th>
                    <th><?= $this->Paginator->sort('tong_chi_tl') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diemTrungBinhTl as $diemTrungBinhTl): ?>
                <tr>
                    <td><?= $this->Number->format($diemTrungBinhTl->sinhvien_id) ?></td>
                    <td><?= h($diemTrungBinhTl->hoten_sv) ?></td>
                    <td><?= $diemTrungBinhTl->diem_tich_luy === null ? '' : $this->Number->format($diemTrungBinhTl->diem_tich_luy) ?></td>
                    <td><?= $this->Number->format($diemTrungBinhTl->so_mon_da_hoc) ?></td>
                    <td><?= $this->Number->format($diemTrungBinhTl->so_mon_da_tich_luy) ?></td>
                    <td><?= $diemTrungBinhTl->tong_chi_tl === null ? '' : $this->Number->format($diemTrungBinhTl->tong_chi_tl) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $diemTrungBinhTl->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diemTrungBinhTl->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diemTrungBinhTl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diemTrungBinhTl->id)]) ?>
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