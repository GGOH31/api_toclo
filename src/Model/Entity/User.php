<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $group_id
 * @property int $atelier_id
 * @property string $username
 * @property string $password
 * @property string $contact
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Atelier[] $ateliers
 * @property \App\Model\Entity\AtelierClient[] $atelier_clients
 * @property \App\Model\Entity\Collectionatelier[] $collectionateliers
 * @property \App\Model\Entity\Collectionclient[] $collectionclients
 * @property \App\Model\Entity\Couture[] $coutures
 * @property \App\Model\Entity\Mesure[] $mesures
 * @property \App\Model\Entity\Parametre[] $parametres
 * @property \App\Model\Entity\Partagecollection[] $partagecollections
 */
class User extends Entity
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
        'group_id' => true,
        'atelier_id' => true,
        'username' => true,
        'password' => true,
        'contact' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'group' => true,
        'ateliers' => true,
        'atelier_clients' => true,
        'collectionateliers' => true,
        'collectionclients' => true,
        'coutures' => true,
        'mesures' => true,
        'parametres' => true,
        'partagecollections' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
