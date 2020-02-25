<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parametre Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $atelier_id
 * @property int|null $unite_mesure
 * @property string|null $arriere_plan
 * @property string|null $design
 * @property string|null $visibilite
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Atelier $atelier
 */
class Parametre extends Entity
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
        'unite_mesure' => true,
        'arriere_plan' => true,
        'design' => true,
        'visibilite' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'atelier' => true,
    ];
}
