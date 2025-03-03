<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LopmonhocTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LopmonhocTable Test Case
 */
class LopmonhocTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LopmonhocTable
     */
    protected $Lopmonhoc;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Lopmonhoc',
        'app.Diem',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lopmonhoc') ? [] : ['className' => LopmonhocTable::class];
        $this->Lopmonhoc = $this->getTableLocator()->get('Lopmonhoc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lopmonhoc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LopmonhocTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
