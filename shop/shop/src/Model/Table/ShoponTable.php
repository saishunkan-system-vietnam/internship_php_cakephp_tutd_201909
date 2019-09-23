<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shopon Model
 *
 * @method \App\Model\Entity\Shopon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shopon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shopon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shopon|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shopon saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shopon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shopon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shopon findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShoponTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('shopon');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('image')
            ->maxLength('image', 255);

        $validator
            ->scalar('linkfb')
            ->maxLength('linkfb', 255)
            ->requirePresence('linkfb', 'create')
            ->notEmptyString('linkfb');

        $validator
            ->scalar('linkyou')
            ->maxLength('linkyou', 255)
            ->requirePresence('linkyou', 'create')
            ->notEmptyString('linkyou');

        $validator
            ->scalar('linkzalo')
            ->maxLength('linkzalo', 255)
            ->requirePresence('linkzalo', 'create')
            ->notEmptyString('linkzalo');

        $validator
            ->dateTime('modifind')
            ->allowEmptyDateTime('modifind');

        return $validator;
    }
}
