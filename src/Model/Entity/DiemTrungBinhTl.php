<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiemTrungBinhTl Entity
 *
 * @property int $sinhvien_id
 * @property string $hoten_sv
 * @property float|null $diem_tich_luy
 * @property int $so_mon_da_hoc
 * @property int $so_mon_da_tich_luy
 * @property string|null $tong_chi_tl
 */
class DiemTrungBinhTl extends Entity
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
        'sinhvien_id' => true,
        'hoten_sv' => true,
        'diem_tich_luy' => true,
        'so_mon_da_hoc' => true,
        'so_mon_da_tich_luy' => true,
        'tong_chi_tl' => true,
    ];
}
