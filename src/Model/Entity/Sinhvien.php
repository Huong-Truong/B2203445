<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sinhvien Entity
 *
 * @property int $id
 * @property string $hoten_sv
 * @property \Cake\I18n\Date|null $ngaysinh
 * @property string|null $email
 * @property string|null $giotinh
 * @property string|null $sdt
 * @property string $password
 *
 * @property \App\Model\Entity\Diem[] $diem
 */
class Sinhvien extends Entity
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
        'hoten_sv' => true,
        'ngaysinh' => true,
        'email' => true,
        'giotinh' => true,
        'sdt' => true,
        'password' => true,
        'diem' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
