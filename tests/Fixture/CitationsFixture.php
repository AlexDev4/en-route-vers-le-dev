<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CitationsFixture
 */
class CitationsFixture extends TestFixture
{
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
                'body' => 'Lorem ipsum dolor sit amet',
                'author' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
