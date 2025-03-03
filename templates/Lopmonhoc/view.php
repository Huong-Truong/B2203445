<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lopmonhoc $lopmonhoc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lopmonhoc'), ['action' => 'edit', $lopmonhoc->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lopmonhoc'), ['action' => 'delete', $lopmonhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lopmonhoc->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lopmonhoc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lopmonhoc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lopmonhoc view content">
            <h3><?= h($lopmonhoc->hocki_nk) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hocki Nk') ?></th>
                    <td><?= h($lopmonhoc->hocki_nk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lopmonhoc->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monhoc Id') ?></th>
                    <td><?= $this->Number->format($lopmonhoc->monhoc_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Diem') ?></h4>
                <?php if (!empty($lopmonhoc->diem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Lopmonhoc Id') ?></th>
                            <th><?= __('Sinhvien Id') ?></th>
                            <th><?= __('Diem') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lopmonhoc->diem as $diem) : ?>
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