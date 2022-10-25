<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newsletters Model
 *
 * @method \App\Model\Entity\Newsletter newEmptyEntity()
 * @method \App\Model\Entity\Newsletter newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Newsletter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newsletter get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newsletter findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Newsletter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newsletter[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newsletter|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newsletter saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewslettersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('newsletters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('mailNew')
            ->maxLength('mailNew', 255)
            ->requirePresence('mailNew', 'create')
            ->notEmptyString('mailNew');

        return $validator;
    }
}
