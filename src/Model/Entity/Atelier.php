<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atelier Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $denomination
 * @property string|null $specialite
 * @property string|null $ville
 * @property string|null $quartier
 * @property string|null $precision
 * @property string|null $telephone
 * @property string|null $photo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\AtelierClient[] $atelier_clients
 * @property \App\Model\Entity\Collectionatelier[] $collectionateliers
 * @property \App\Model\Entity\Couture[] $coutures
 * @property \App\Model\Entity\Mesure[] $mesures
 * @property \App\Model\Entity\Parametre[] $parametres
 * @property \App\Model\Entity\Partagecollection[] $partagecollections
 */
class Atelier extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'denomination' => true,
        'specialite' => true,
        'ville' => true,
        'quartier' => true,
        'precision' => true,
        'telephone' => true,
        'photo' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'users' => true,
        'atelier_clients' => true,
        'collectionateliers' => true,
        'coutures' => true,
        'mesures' => true,
        'parametres' => true,
        'partagecollections' => true,
    ];
}
