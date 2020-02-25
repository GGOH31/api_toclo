<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mesure Entity
 *
 * @property int $id
 * @property int $coutureid
 * @property int|null $atelier_id
 * @property int $client_id
 * @property int $coutureclient
 * @property int|null $epaule
 * @property int|null $poitrine
 * @property int|null $tour_taille
 * @property int|null $longueur_taille
 * @property string|null $hauteur_poitrine
 * @property int|null $tour_hanches
 * @property int|null $longueur_manche
 * @property int|null $longueur_haut
 * @property int|null $ceinture
 * @property int|null $bassin
 * @property int|null $tour_cuisse
 * @property int|null $longueur_pantalon_robe
 * @property int|null $frappe
 * @property int|null $bas
 * @property int|null $custom_field1
 * @property int|null $custom_field2
 * @property int|null $custom_field3
 * @property int|null $custom_field4
 * @property int|null $custom_field5
 * @property string|null $commentaire
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Atelier $atelier
 * @property \App\Model\Entity\AtelierClient $atelier_client
 */
class Mesure extends Entity
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
        'coutureid' => true,
        'atelier_id' => true,
        'client_id' => true,
        'coutureclient' => true,
        'epaule' => true,
        'poitrine' => true,
        'tour_taille' => true,
        'longueur_taille' => true,
        'hauteur_poitrine' => true,
        'tour_hanches' => true,
        'longueur_manche' => true,
        'longueur_haut' => true,
        'ceinture' => true,
        'bassin' => true,
        'tour_cuisse' => true,
        'longueur_pantalon_robe' => true,
        'frappe' => true,
        'bas' => true,
        'custom_field1' => true,
        'custom_field2' => true,
        'custom_field3' => true,
        'custom_field4' => true,
        'custom_field5' => true,
        'commentaire' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'user' => true,
        'atelier' => true,
        'atelier_client' => true,
    ];
}
