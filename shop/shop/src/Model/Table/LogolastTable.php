<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logolast Model
 *
 * @method \App\Model\Entity\Logolast get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logolast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Logolast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logolast|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logolast saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logolast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logolast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logolast findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogolastTable extends Table
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

        $this->setTable('logolast');
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
            ->scalar('link')
            ->maxLength('link', 255)
            ->requirePresence('link', 'create')
            ->notEmptyString('link');

        $validator
            ->scalar('image')
            ->maxLength('image', 255);

        $validator
            ->scalar('text')
            ->maxLength('text', 255)
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        $validator
            ->dateTime('modifind')
            ->allowEmptyDateTime('modifind');

        return $validator;
    }
}
