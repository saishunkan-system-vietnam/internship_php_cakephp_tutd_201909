<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Logolast Entity
 *
 * @property int $id
 * @property string $link
 * @property string $image
 * @property string $text
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifind
 */
class Logolast extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'link' => true,
        'image' => true,
        'text' => true,
        'status' => true,
        'created' => true,
        'modifind' => true
    ];
}
