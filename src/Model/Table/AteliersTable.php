<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ateliers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AtelierClientsTable&\Cake\ORM\Association\HasMany $AtelierClients
 * @property \App\Model\Table\CollectionateliersTable&\Cake\ORM\Association\HasMany $Collectionateliers
 * @property \App\Model\Table\CouturesTable&\Cake\ORM\Association\HasMany $Coutures
 * @property \App\Model\Table\MesuresTable&\Cake\ORM\Association\HasMany $Mesures
 * @property \App\Model\Table\ParametresTable&\Cake\ORM\Association\HasMany $Parametres
 * @property \App\Model\Table\PartagecollectionsTable&\Cake\ORM\Association\HasMany $Partagecollections
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Atelier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atelier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atelier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atelier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atelier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atelier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atelier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atelier findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AteliersTable extends Table
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

        $this->setTable('ateliers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('AtelierClients', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->hasMany('Collectionateliers', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->hasMany('Coutures', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->hasMany('Mesures', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->hasMany('Parametres', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->hasMany('Partagecollections', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'atelier_id',
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
            ->scalar('denomination')
            ->maxLength('denomination', 100)
            ->allowEmptyString('denomination');

        $validator
            ->scalar('specialite')
            ->maxLength('specialite', 255)
            ->allowEmptyString('specialite');

        $validator
            ->scalar('ville')
            ->maxLength('ville', 50)
            ->allowEmptyString('ville');

        $validator
            ->scalar('quartier')
            ->maxLength('quartier', 50)
            ->allowEmptyString('quartier');

        $validator
            ->scalar('precision')
            ->allowEmptyString('precision');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 15)
            ->allowEmptyString('telephone');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
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

        return $rules;
    }
}
