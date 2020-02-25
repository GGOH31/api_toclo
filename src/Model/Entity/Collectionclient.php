<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collectionclient Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $client_id
 * @property string $modele
 * @property string $photo
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Couture[] $coutures
 */
class Collectionclient extends Entity
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
        'client_id' => true,
        'modele' => true,
        'photo' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'client' => true,
        'coutures' => true,
    ];
}
