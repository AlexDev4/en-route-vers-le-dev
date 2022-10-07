<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BanTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BanTable Test Case
 */
class BanTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BanTable
     */
    protected $Ban;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ban',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ban') ? [] : ['className' => BanTable::class];
        $this->Ban = $this->getTableLocator()->get('Ban', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ban);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BanTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
