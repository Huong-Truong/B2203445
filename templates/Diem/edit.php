<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 * @var string[]|\Cake\Collection\CollectionInterface $lopmonhocs
 * @var string[]|\Cake\Collection\CollectionInterface $sinhviens
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diem->lopmonhoc_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diem->lopmonhoc_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Diem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diem form content">
            <?= $this->Form->create($diem) ?>
            <fieldset>
                <legend><?= __('Edit Diem') ?></legend>
                <?php
                    echo $this->Form->control('diem');
                    echo $this->Form->control('id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
