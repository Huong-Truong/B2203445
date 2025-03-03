<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonhocFixture
 */
class MonhocFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'monhoc';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'ten_mon' => 'Lorem ipsum dolor sit amet',
                'so_tc' => 1,
                'co_tinh_tl' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
