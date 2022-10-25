<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewslettersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewslettersTable Test Case
 */
class NewslettersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewslettersTable
     */
    protected $Newsletters;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Newsletters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Newsletters') ? [] : ['className' => NewslettersTable::class];
        $this->Newsletters = $this->getTableLocator()->get('Newsletters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Newsletters);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NewslettersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
