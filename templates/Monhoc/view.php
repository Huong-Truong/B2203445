<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monhoc $monhoc
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monhoc'), ['action' => 'edit', $monhoc->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monhoc'), ['action' => 'delete', $monhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monhoc->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monhoc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monhoc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monhoc view content">
            <h3><?= h($monhoc->ten_mon) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ten Mon') ?></th>
                    <td><?= h($monhoc->ten_mon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Tinh Tl') ?></th>
                    <td><?= h($monhoc->co_tinh_tl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($monhoc->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Tc') ?></th>
                    <td><?= $this->Number->format($monhoc->so_tc) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Lopmonhoc') ?></h4>
                <?php if (!empty($monhoc->lopmonhoc)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monhoc Id') ?></th>
                            <th><?= __('Hocki Nk') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($monhoc->lopmonhoc as $lopmonhoc) : ?>
                        <tr>
                            <td><?= h($lopmonhoc->id) ?></td>
                            <td><?= h($lopmonhoc->monhoc_id) ?></td>
                            <td><?= h($lopmonhoc->hocki_nk) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Lopmonhoc', 'action' => 'view', $lopmonhoc->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Lopmonhoc', 'action' => 'edit', $lopmonhoc->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lopmonhoc', 'action' => 'delete', $lopmonhoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lopmonhoc->id)]) ?>
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