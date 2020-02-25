<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parametres Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AteliersTable&\Cake\ORM\Association\BelongsTo $Ateliers
 *
 * @method \App\Model\Entity\Parametre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parametre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parametre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parametre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parametre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parametre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parametre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parametre findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParametresTable extends Table
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

        $this->setTable('parametres');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Ateliers', [
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
            ->integer('unite_mesure')
            ->allowEmptyString('unite_mesure');

        $validator
            ->scalar('arriere_plan')
            ->maxLength('arriere_plan', 255)
            ->allowEmptyString('arriere_plan');

        $validator
            ->scalar('design')
            ->maxLength('design', 255)
            ->allowEmptyString('design');

        $validator
            ->scalar('visibilite')
            ->maxLength('visibilite', 255)
            ->allowEmptyString('visibilite');

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

        return $rules;
    }
}
