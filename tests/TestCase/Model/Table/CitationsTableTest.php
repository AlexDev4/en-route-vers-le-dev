<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CitationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CitationsTable Test Case
 */
class CitationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CitationsTable
     */
    protected $Citations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Citations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Citations') ? [] : ['className' => CitationsTable::class];
        $this->Citations = $this->getTableLocator()->get('Citations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Citations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CitationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
