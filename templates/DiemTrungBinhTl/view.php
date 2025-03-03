<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiemTrungBinhTl $diemTrungBinhTl
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Diem Trung Binh Tl'), ['action' => 'edit', $diemTrungBinhTl->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Diem Trung Binh Tl'), ['action' => 'delete', $diemTrungBinhTl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diemTrungBinhTl->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Diem Trung Binh Tl'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Diem Trung Binh Tl'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diemTrungBinhTl view content">
            <h3><?= h($diemTrungBinhTl->hoten_sv) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hoten Sv') ?></th>
                    <td><?= h($diemTrungBinhTl->hoten_sv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sinhvien Id') ?></th>
                    <td><?= $this->Number->format($diemTrungBinhTl->sinhvien_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diem Tich Luy') ?></th>
                    <td><?= $diemTrungBinhTl->diem_tich_luy === null ? '' : $this->Number->format($diemTrungBinhTl->diem_tich_luy) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Mon Da Hoc') ?></th>
                    <td><?= $this->Number->format($diemTrungBinhTl->so_mon_da_hoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Mon Da Tich Luy') ?></th>
                    <td><?= $this->Number->format($diemTrungBinhTl->so_mon_da_tich_luy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tong Chi Tl') ?></th>
                    <td><?= $diemTrungBinhTl->tong_chi_tl === null ? '' : $this->Number->format($diemTrungBinhTl->tong_chi_tl) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>