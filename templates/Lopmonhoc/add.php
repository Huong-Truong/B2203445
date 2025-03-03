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
            <?= $this->Html->link(__('List Lopmonhoc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="lopmonhoc form content">
            <?= $this->Form->create($lopmonhoc) ?>
            <fieldset>
                <legend><?= __('Add Lopmonhoc') ?></legend>
                <?php
                    echo $this->Form->control('monhoc_id');
                    echo $this->Form->control('hocki_nk');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
