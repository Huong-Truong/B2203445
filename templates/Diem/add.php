<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 * @var \Cake\Collection\CollectionInterface|string[] $lopmonhocs
 * @var \Cake\Collection\CollectionInterface|string[] $sinhviens
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Diem'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diem form content">
            <?= $this->Form->create($diem) ?>
            <fieldset>
                <legend><?= __('Add Diem') ?></legend>
                <?php
                    echo $this->Form->control('lopmonhoc_id', ['options' => $lopmonhocs]);
                    echo $this->Form->control('sinhvien_id', ['options' => $sinhviens]);
                    echo $this->Form->control('diem');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
