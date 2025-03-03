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
            <?= $this->Html->link(__('List Monhoc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monhoc form content">
            <?= $this->Form->create($monhoc) ?>
            <fieldset>
                <legend><?= __('Add Monhoc') ?></legend>
                <?php
                    echo $this->Form->control('ten_mon');
                    echo $this->Form->control('so_tc');
                    echo $this->Form->control('co_tinh_tl');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
