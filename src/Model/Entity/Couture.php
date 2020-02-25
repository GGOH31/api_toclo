<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Couture Entity
 *
 * @property int $id
 * @property int|null $client_id
 * @property int $user_id
 * @property int $atelier_id
 * @property int|null $collectionatelier_id
 * @property int|null $collectionclient_id
 * @property int $atelier_client_id
 * @property string|null $vetement
 * @property string|null $photo
 * @property int|null $cout
 * @property int|null $avance
 * @property \Cake\I18n\FrozenTime|null $date_depot
 * @property \Cake\I18n\FrozenTime|null $date_retrait
 * @property string|null $commentaire
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Atelier $atelier
 * @property \App\Model\Entity\Collectionatelier $collectionatelier
 * @property \App\Model\Entity\Collectionclient $collectionclient
 * @property \App\Model\Entity\AtelierClient $atelier_client
 */
class Couture extends Entity
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
        'client_id' => true,
        'user_id' => true,
        'atelier_id' => true,
        'collectionatelier_id' => true,
        'collectionclient_id' => true,
        'atelier_client_id' => true,
        'vetement' => true,
        'photo' => true,
        'cout' => true,
        'avance' => true,
        'date_depot' => true,
        'date_retrait' => true,
        'commentaire' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'client' => true,
        'user' => true,
        'atelier' => true,
        'collectionatelier' => true,
        'collectionclient' => true,
        'atelier_client' => true,
    ];
}
