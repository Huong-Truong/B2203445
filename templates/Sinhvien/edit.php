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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sinhvien->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sinhvien->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sinhvien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sinhvien form content">
            <?= $this->Form->create($sinhvien) ?>
            <fieldset>
                <legend><?= __('Edit Sinhvien') ?></legend>
                <?php
                    echo $this->Form->control('hoten_sv');
                    echo $this->Form->control('ngaysinh', ['empty' => true]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('giotinh');
                    echo $this->Form->control('sdt');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
