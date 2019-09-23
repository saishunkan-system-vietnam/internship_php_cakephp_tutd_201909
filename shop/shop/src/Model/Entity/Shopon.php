<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shopon Entity
 *
 * @property int $id
 * @property string $image
 * @property string $linkfb
 * @property string $linkyou
 * @property string $linkzalo
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifind
 */
class Shopon extends Entity
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
        'image' => true,
        'linkfb' => true,
        'linkyou' => true,
        'linkzalo' => true,
        'status' => true,
        'created' => true,
        'modifind' => true
    ];
}
