<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $product_name
 * @property string $image
 * @property int $price
 * @property int $sale
 * @property string $description
 * @property int $size
 * @property string $slug
 * @property int $categories_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $update_at
 *
 * @property \App\Model\Entity\Category $category
 */
class Product extends Entity
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
        'product_name' => true,
        'image' => true,
        'price' => true,
        'sale' => true,
        'description' => true,
        'size' => true,
        'slug' => true,
        'categories_id' => true,
        'status' => true,
        'created' => true,
        'update_at' => true,
        'category' => true
    ];
}
