<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiemFixture
 */
class DiemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'diem';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'lopmonhoc_id' => 1,
                'sinhvien_id' => 1,
                'diem' => 'Lorem ipsum dolor sit amet',
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
