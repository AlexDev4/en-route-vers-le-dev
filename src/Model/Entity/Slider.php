<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slider Entity
 *
 * @property int $id
 * @property string $img
 * @property string|null $category
 * @property string $link_article
 * @property string $link_cat
 * @property string|null $title
 * @property \Cake\I18n\FrozenTime|null $date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $is_active
 */
class Slider extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'img' => true,
        'category' => true,
        'link_article' => true,
        'link_cat' => true,
        'title' => true,
        'date' => true,
        'created' => true,
        'modified' => true,
        'is_active' => true,
    ];
}
