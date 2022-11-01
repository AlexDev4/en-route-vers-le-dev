<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Citations Model
 *
 * @method \App\Model\Entity\Citation newEmptyEntity()
 * @method \App\Model\Entity\Citation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Citation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Citation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Citation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Citation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Citation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Citation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Citation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Citation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Citation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Citation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Citation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CitationsTable extends Table
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

        $this->setTable('citations');
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
            ->scalar('body')
            ->maxLength('body', 255)
            ->notEmptyString('body');

        $validator
            ->scalar('author')
            ->maxLength('author', 255)
            ->notEmptyString('author');

        return $validator;
    }
}
