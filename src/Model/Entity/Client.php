<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $nom
 * @property string|null $sudonim
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $photo
 * @property int $group_id
 * @property string $password
 * @property string|null $identifiant_client
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\AtelierClient[] $atelier_clients
 * @property \App\Model\Entity\Collectionclient[] $collectionclients
 * @property \App\Model\Entity\Couture[] $coutures
 * @property \App\Model\Entity\Partagecollection[] $partagecollections
 */
class Client extends Entity
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
        'nom' => true,
        'sudonim' => true,
        'email' => true,
        'telephone' => true,
        'photo' => true,
        'group_id' => true,
        'password' => true,
        'identifiant_client' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'atelier_clients' => true,
        'collectionclients' => true,
        'coutures' => true,
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
