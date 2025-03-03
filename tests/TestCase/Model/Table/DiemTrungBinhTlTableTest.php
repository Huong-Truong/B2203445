<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiemTrungBinhTlTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiemTrungBinhTlTable Test Case
 */
class DiemTrungBinhTlTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DiemTrungBinhTlTable
     */
    protected $DiemTrungBinhTl;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DiemTrungBinhTl',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DiemTrungBinhTl') ? [] : ['className' => DiemTrungBinhTlTable::class];
        $this->DiemTrungBinhTl = $this->getTableLocator()->get('DiemTrungBinhTl', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DiemTrungBinhTl);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DiemTrungBinhTlTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
