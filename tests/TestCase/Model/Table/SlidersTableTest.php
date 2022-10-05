<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SlidersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SlidersTable Test Case
 */
class SlidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SlidersTable
     */
    protected $Sliders;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sliders',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sliders') ? [] : ['className' => SlidersTable::class];
        $this->Sliders = $this->getTableLocator()->get('Sliders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sliders);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SlidersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
