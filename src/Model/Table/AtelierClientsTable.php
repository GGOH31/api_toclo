<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AtelierClients Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AteliersTable&\Cake\ORM\Association\BelongsTo $Ateliers
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\CouturesTable&\Cake\ORM\Association\HasMany $Coutures
 * @property \App\Model\Table\MesuresTable&\Cake\ORM\Association\HasMany $Mesures
 *
 * @method \App\Model\Entity\AtelierClient get($primaryKey, $options = [])
 * @method \App\Model\Entity\AtelierClient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AtelierClient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AtelierClient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AtelierClient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AtelierClient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AtelierClient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AtelierClient findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AtelierClientsTable extends Table
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

        $this->setTable('atelier_clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ateliers', [
            'foreignKey' => 'atelier_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Coutures', [
            'foreignKey' => 'atelier_client_id',
        ]);
        $this->hasMany('Mesures', [
            'foreignKey' => 'atelier_client_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('identifiant_client_atelier')
            ->maxLength('identifiant_client_atelier', 255)
            ->requirePresence('identifiant_client_atelier', 'create')
            ->notEmptyString('identifiant_client_atelier');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->allowEmptyString('nom');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 50)
            ->allowEmptyString('telephone');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 4294967295)
            ->allowEmptyString('photo');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['atelier_id'], 'Ateliers'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
