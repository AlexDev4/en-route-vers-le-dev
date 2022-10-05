<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SliderTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SliderTable Test Case
 */
class SliderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SliderTable
     */
    protected $Slider;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Slider',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Slider') ? [] : ['className' => SliderTable::class];
        $this->Slider = $this->getTableLocator()->get('Slider', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Slider);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SliderTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
