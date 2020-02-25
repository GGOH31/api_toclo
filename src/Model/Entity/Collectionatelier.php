<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collectionatelier Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $atelier_id
 * @property string $modele
 * @property string|null $photo
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Atelier $atelier
 * @property \App\Model\Entity\Couture[] $coutures
 */
class Collectionatelier extends Entity
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
        'atelier_id' => true,
        'modele' => true,
        'photo' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'atelier' => true,
        'coutures' => true,
    ];
}
