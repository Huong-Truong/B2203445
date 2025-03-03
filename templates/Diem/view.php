<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Diem'), ['action' => 'edit', $diem->lopmonhoc_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Diem'), ['action' => 'delete', $diem->lopmonhoc_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->lopmonhoc_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Diem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Diem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diem view content">
            <h3><?= h($diem->diem) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lopmonhoc') ?></th>
                    <td><?= $diem->hasValue('lopmonhoc') ? $this->Html->link($diem->lopmonhoc->hocki_nk, ['controller' => 'Lopmonhoc', 'action' => 'view', $diem->lopmonhoc->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sinhvien') ?></th>
                    <td><?= $diem->hasValue('sinhvien') ? $this->Html->link($diem->sinhvien->hoten_sv, ['controller' => 'Sinhvien', 'action' => 'view', $diem->sinhvien->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Diem') ?></th>
                    <td><?= h($diem->diem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($diem->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>