<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property &\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\AtelierClientsTable&\Cake\ORM\Association\HasMany $AtelierClients
 * @property \App\Model\Table\CollectionclientsTable&\Cake\ORM\Association\HasMany $Collectionclients
 * @property \App\Model\Table\CouturesTable&\Cake\ORM\Association\HasMany $Coutures
 * @property \App\Model\Table\PartagecollectionsTable&\Cake\ORM\Association\HasMany $Partagecollections
 * @property &\Cake\ORM\Association\HasMany $Posts
 *
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('AtelierClients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Collectionclients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Coutures', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Partagecollections', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Posts', [
            'foreignKey' => 'client_id',
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
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('sudonim')
            ->maxLength('sudonim', 200)
            ->allowEmptyString('sudonim');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 15)
            ->allowEmptyString('telephone');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->scalar('password')
            ->maxLength('password', 250)
            //->requirePresence('password', 'create')
            ->allowEmptyString('password');

        $validator
            ->scalar('identifiant_client')
            ->maxLength('identifiant_client', 255)
            ->allowEmptyString('identifiant_client');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));

        return $rules;
    }
}
