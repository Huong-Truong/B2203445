<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiemTrungBinhTlFixture
 */
class DiemTrungBinhTlFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'diem_trung_binh_tl';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'sinhvien_id' => 1,
                'hoten_sv' => 'Lorem ipsum dolor sit amet',
                'diem_tich_luy' => 1,
                'so_mon_da_hoc' => 1,
                'so_mon_da_tich_luy' => 1,
                'tong_chi_tl' => 1.5,
            ],
        ];
        parent::init();
    }
}
