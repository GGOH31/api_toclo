<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\GroupsTable&\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\AteliersTable&\Cake\ORM\Association\BelongsTo $Ateliers
 * @property \App\Model\Table\AtelierClientsTable&\Cake\ORM\Association\HasMany $AtelierClients
 * @property \App\Model\Table\AteliersTable&\Cake\ORM\Association\HasMany $Ateliers
 * @property \App\Model\Table\CollectionateliersTable&\Cake\ORM\Association\HasMany $Collectionateliers
 * @property \App\Model\Table\CollectionclientsTable&\Cake\ORM\Association\HasMany $Collectionclients
 * @property \App\Model\Table\CouturesTable&\Cake\ORM\Association\HasMany $Coutures
 * @property \App\Model\Table\MesuresTable&\Cake\ORM\Association\HasMany $Mesures
 * @property \App\Model\Table\ParametresTable&\Cake\ORM\Association\HasMany $Parametres
 * @property \App\Model\Table\PartagecollectionsTable&\Cake\ORM\Association\HasMany $Partagecollections
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ateliers', [
            'foreignKey' => 'atelier_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('AtelierClients', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Ateliers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Collectionateliers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Collectionclients', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Coutures', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Mesures', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Parametres', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Partagecollections', [
            'foreignKey' => 'user_id',
        ]);
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 50)
            ->requirePresence('username', 'create')
            ->notEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('contact')
            ->maxLength('contact', 255)
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact')
            ->add('contact', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['contact']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        $rules->add($rules->existsIn(['atelier_id'], 'Ateliers'));

        return $rules;
    }
}
