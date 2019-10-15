<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string|null $order_info
 * @property int $total
 * @property string $username
 * @property int $phone
 * @property string $email
 * @property string $addr
 * @property bool|null $delivery
 * @property bool|null $status
 * @property string $note
 * @property \Cake\I18n\FrozenDate|null $created
 */
class Order extends Entity
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
        'order_info' => true,
        'total' => true,
        'username' => true,
        'phone' => true,
        'email' => true,
        'addr' => true,
        'delivery' => true,
        'status' => true,
        'note' => true,
        'created' => true
    ];
}
