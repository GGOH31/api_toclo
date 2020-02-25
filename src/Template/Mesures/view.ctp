<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesure $mesure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mesure'), ['action' => 'edit', $mesure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mesure'), ['action' => 'delete', $mesure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mesures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mesures view large-9 medium-8 columns content">
    <h3><?= h($mesure->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Atelier') ?></th>
            <td><?= $mesure->has('atelier') ? $this->Html->link($mesure->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $mesure->atelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hauteur Poitrine') ?></th>
            <td><?= h($mesure->hauteur_poitrine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mesure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coutureid') ?></th>
            <td><?= $this->Number->format($mesure->coutureid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($mesure->client_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coutureclient') ?></th>
            <td><?= $this->Number->format($mesure->coutureclient) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Epaule') ?></th>
            <td><?= $this->Number->format($mesure->epaule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poitrine') ?></th>
            <td><?= $this->Number->format($mesure->poitrine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Taille') ?></th>
            <td><?= $this->Number->format($mesure->tour_taille) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longueur Taille') ?></th>
            <td><?= $this->Number->format($mesure->longueur_taille) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Hanches') ?></th>
            <td><?= $this->Number->format($mesure->tour_hanches) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longueur Manche') ?></th>
            <td><?= $this->Number->format($mesure->longueur_manche) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longueur Haut') ?></th>
            <td><?= $this->Number->format($mesure->longueur_haut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ceinture') ?></th>
            <td><?= $this->Number->format($mesure->ceinture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bassin') ?></th>
            <td><?= $this->Number->format($mesure->bassin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tour Cuisse') ?></th>
            <td><?= $this->Number->format($mesure->tour_cuisse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longueur Pantalon Robe') ?></th>
            <td><?= $this->Number->format($mesure->longueur_pantalon_robe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frappe') ?></th>
            <td><?= $this->Number->format($mesure->frappe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bas') ?></th>
            <td><?= $this->Number->format($mesure->bas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Field1') ?></th>
            <td><?= $this->Number->format($mesure->custom_field1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Field2') ?></th>
            <td><?= $this->Number->format($mesure->custom_field2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Field3') ?></th>
            <td><?= $this->Number->format($mesure->custom_field3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Field4') ?></th>
            <td><?= $this->Number->format($mesure->custom_field4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Field5') ?></th>
            <td><?= $this->Number->format($mesure->custom_field5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mesure->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mesure->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($mesure->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Commentaire') ?></h4>
        <?= $this->Text->autoParagraph(h($mesure->commentaire)); ?>
    </div>
</div>
