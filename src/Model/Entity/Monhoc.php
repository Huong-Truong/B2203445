<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Monhoc Entity
 *
 * @property int $id
 * @property string $ten_mon
 * @property int $so_tc
 * @property string $co_tinh_tl
 *
 * @property \App\Model\Entity\Lopmonhoc[] $lopmonhoc
 */
class Monhoc extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'ten_mon' => true,
        'so_tc' => true,
        'co_tinh_tl' => true,
        'lopmonhoc' => true,
    ];
}
