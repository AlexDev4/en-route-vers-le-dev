<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SlidersFixture
 */
class SlidersFixture extends TestFixture
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
                'img' => 'Lorem ipsum dolor sit amet',
                'category' => 'Lorem ipsum dolor sit amet',
                'link_article' => 'Lorem ipsum dolor sit amet',
                'link_cat' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'date' => '2022-11-03 15:58:39',
                'created' => '2022-11-03 15:58:39',
                'modified' => '2022-11-03 15:58:39',
                'is_active' => 1,
            ],
        ];
        parent::init();
    }
}
