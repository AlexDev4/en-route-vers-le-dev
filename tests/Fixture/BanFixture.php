<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BanFixture
 */
class BanFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ban';
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
                'adress' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
