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
            <?= $this->Html->link(__('List Diem Trung Binh Tl'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diemTrungBinhTl form content">
            <?= $this->Form->create($diemTrungBinhTl) ?>
            <fieldset>
                <legend><?= __('Add Diem Trung Binh Tl') ?></legend>
                <?php
                    echo $this->Form->control('sinhvien_id');
                    echo $this->Form->control('hoten_sv');
                    echo $this->Form->control('diem_tich_luy');
                    echo $this->Form->control('so_mon_da_hoc');
                    echo $this->Form->control('so_mon_da_tich_luy');
                    echo $this->Form->control('tong_chi_tl');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
