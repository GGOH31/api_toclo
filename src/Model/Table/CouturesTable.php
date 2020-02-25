<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coutures Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AteliersTable&\Cake\ORM\Association\BelongsTo $Ateliers
 * @property \App\Model\Table\CollectionateliersTable&\Cake\ORM\Association\BelongsTo $Collectionateliers
 * @property \App\Model\Table\CollectionclientsTable&\Cake\ORM\Association\BelongsTo $Collectionclients
 * @property \App\Model\Table\AtelierClientsTable&\Cake\ORM\Association\BelongsTo $AtelierClients
 *
 * @method \App\Model\Entity\Couture get($primaryKey, $options = [])
 * @method \App\Model\Entity\Couture newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Couture[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Couture|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Couture saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Couture patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Couture[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Couture findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CouturesTable extends Table
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

        $this->setTable('coutures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ateliers', [
            'foreignKey' => 'atelier_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Collectionateliers', [
            'foreignKey' => 'collectionatelier_id',
        ]);
        $this->belongsTo('Collectionclients', [
            'foreignKey' => 'collectionclient_id',
        ]);
        $this->belongsTo('AtelierClients', [
            'foreignKey' => 'atelier_client_id',
            'joinType' => 'INNER',
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
            ->scalar('vetement')
            ->maxLength('vetement', 100)
            ->allowEmptyString('vetement');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->integer('cout')
            ->allowEmptyString('cout');

        $validator
            ->integer('avance')
            ->allowEmptyString('avance');

        $validator
            ->dateTime('date_depot')
            ->allowEmptyDateTime('date_depot');

        $validator
            ->dateTime('date_retrait')
            ->allowEmptyDateTime('date_retrait');

        $validator
            ->scalar('commentaire')
            ->allowEmptyString('commentaire');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['atelier_id'], 'Ateliers'));
        $rules->add($rules->existsIn(['collectionatelier_id'], 'Collectionateliers'));
        $rules->add($rules->existsIn(['collectionclient_id'], 'Collectionclients'));
        $rules->add($rules->existsIn(['atelier_client_id'], 'AtelierClients'));

        return $rules;
    }
}
