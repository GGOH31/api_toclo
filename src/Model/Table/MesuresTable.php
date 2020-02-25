<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mesures Model
 *
 * @property \App\Model\Table\AteliersTable&\Cake\ORM\Association\BelongsTo $Ateliers
 * @property &\Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\Mesure get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mesure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mesure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mesure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mesure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mesure findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MesuresTable extends Table
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

        $this->setTable('mesures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Ateliers', [
            'foreignKey' => 'atelier_id',
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
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
            ->integer('coutureid')
            ->requirePresence('coutureid', 'create')
            ->notEmptyString('coutureid');

        $validator
            ->integer('coutureclient')
            ->requirePresence('coutureclient', 'create')
            ->notEmptyString('coutureclient');

        $validator
            ->integer('epaule')
            ->allowEmptyString('epaule');

        $validator
            ->integer('poitrine')
            ->allowEmptyString('poitrine');

        $validator
            ->integer('tour_taille')
            ->allowEmptyString('tour_taille');

        $validator
            ->integer('longueur_taille')
            ->allowEmptyString('longueur_taille');

        $validator
            ->scalar('hauteur_poitrine')
            ->maxLength('hauteur_poitrine', 200)
            ->allowEmptyString('hauteur_poitrine');

        $validator
            ->integer('tour_hanches')
            ->allowEmptyString('tour_hanches');

        $validator
            ->integer('longueur_manche')
            ->allowEmptyString('longueur_manche');

        $validator
            ->integer('longueur_haut')
            ->allowEmptyString('longueur_haut');

        $validator
            ->integer('ceinture')
            ->allowEmptyString('ceinture');

        $validator
            ->integer('bassin')
            ->allowEmptyString('bassin');

        $validator
            ->integer('tour_cuisse')
            ->allowEmptyString('tour_cuisse');

        $validator
            ->integer('longueur_pantalon_robe')
            ->allowEmptyString('longueur_pantalon_robe');

        $validator
            ->integer('frappe')
            ->allowEmptyString('frappe');

        $validator
            ->integer('bas')
            ->allowEmptyString('bas');

        $validator
            ->integer('custom_field1')
            ->allowEmptyString('custom_field1');

        $validator
            ->integer('custom_field2')
            ->allowEmptyString('custom_field2');

        $validator
            ->integer('custom_field3')
            ->allowEmptyString('custom_field3');

        $validator
            ->integer('custom_field4')
            ->allowEmptyString('custom_field4');

        $validator
            ->integer('custom_field5')
            ->allowEmptyString('custom_field5');

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
        $rules->add($rules->existsIn(['atelier_id'], 'Ateliers'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
