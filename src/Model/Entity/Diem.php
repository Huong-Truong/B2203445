<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diem Entity
 *
 * @property int $lopmonhoc_id
 * @property int $sinhvien_id
 * @property string $diem
 * @property int $id
 *
 * @property \App\Model\Entity\Lopmonhoc $lopmonhoc
 * @property \App\Model\Entity\Sinhvien $sinhvien
 */
class Diem extends Entity
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
        'lopmonhoc_id' => true,
        'sinhvien_id' => true,
        'diem' => true,
        'lopmonhoc' => true,
        'sinhvien' => true,
    ];
}
