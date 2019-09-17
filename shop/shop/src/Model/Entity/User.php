<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;


/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $phone
 * @property string $addr
 * @property string $email
 * @property bool|null $lever
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenDate|null $modifind
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'phone' => true,
        'addr' => true,
        'email' => true,
        'lever' => true,
        'created' => true,
        'modifind' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($password){
        return(new DefaultPasswordHasher())->hash($password);
    }
}
