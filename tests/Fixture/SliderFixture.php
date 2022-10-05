<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SliderFixture
 */
class SliderFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'slider';
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
                'img' => 'Lorem ipsum dolor sit amet',
                'category' => 'Lorem ipsum dolor sit amet',
                'link' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'date' => '2022-10-04 12:08:39',
                'created' => '2022-10-04 12:08:39',
                'modified' => '2022-10-04 12:08:39',
                'is_active' => 1,
            ],
        ];
        parent::init();
    }
}
