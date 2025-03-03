<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sinhvien $sinhvien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sinhvien'), ['action' => 'edit', $sinhvien->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sinhvien'), ['action' => 'delete', $sinhvien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sinhvien->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sinhvien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sinhvien'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sinhvien view content">
            <h3><?= h($sinhvien->hoten_sv) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hoten Sv') ?></th>
                    <td><?= h($sinhvien->hoten_sv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($sinhvien->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Giotinh') ?></th>
                    <td><?= h($sinhvien->giotinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sdt') ?></th>
                    <td><?= h($sinhvien->sdt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sinhvien->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngaysinh') ?></th>
                    <td><?= h($sinhvien->ngaysinh) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Diem') ?></h4>
                <?php if (!empty($sinhvien->diem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Lopmonhoc Id') ?></th>
                            <th><?= __('Sinhvien Id') ?></th>
                            <th><?= __('Diem') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sinhvien->diem as $diem) : ?>
                        <tr>
                            <td><?= h($diem->lopmonhoc_id) ?></td>
                            <td><?= h($diem->sinhvien_id) ?></td>
                            <td><?= h($diem->diem) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Diem', 'action' => 'view', $diem->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Diem', 'action' => 'edit', $diem->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Diem', 'action' => 'delete', $diem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
