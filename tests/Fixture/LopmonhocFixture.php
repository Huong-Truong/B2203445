<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LopmonhocFixture
 */
class LopmonhocFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'lopmonhoc';
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
                'monhoc_id' => 1,
                'hocki_nk' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
