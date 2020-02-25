<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AtelierClient $atelierClient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atelier Client'), ['action' => 'edit', $atelierClient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atelier Client'), ['action' => 'delete', $atelierClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atelierClient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mesures'), ['controller' => 'Mesures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesure'), ['controller' => 'Mesures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="atelierClients view large-9 medium-8 columns content">
    <h3><?= h($atelierClient->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $atelierClient->has('user') ? $this->Html->link($atelierClient->user->id, ['controller' => 'Users', 'action' => 'view', $atelierClient->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier') ?></th>
            <td><?= $atelierClient->has('atelier') ? $this->Html->link($atelierClient->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $atelierClient->atelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $atelierClient->has('client') ? $this->Html->link($atelierClient->client->id, ['controller' => 'Clients', 'action' => 'view', $atelierClient->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identifiant Client Atelier') ?></th>
            <td><?= h($atelierClient->identifiant_client_atelier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($atelierClient->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($atelierClient->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atelierClient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atelierClient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atelierClient->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($atelierClient->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($atelierClient->photo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coutures') ?></h4>
        <?php if (!empty($atelierClient->coutures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Collectionatelier Id') ?></th>
                <th scope="col"><?= __('Collectionclient Id') ?></th>
                <th scope="col"><?= __('Atelier Client Id') ?></th>
                <th scope="col"><?= __('Vetement') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Cout') ?></th>
                <th scope="col"><?= __('Avance') ?></th>
                <th scope="col"><?= __('Date Depot') ?></th>
                <th scope="col"><?= __('Date Retrait') ?></th>
                <th scope="col"><?= __('Commentaire') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atelierClient->coutures as $coutures): ?>
            <tr>
                <td><?= h($coutures->id) ?></td>
                <td><?= h($coutures->client_id) ?></td>
                <td><?= h($coutures->user_id) ?></td>
                <td><?= h($coutures->atelier_id) ?></td>
                <td><?= h($coutures->collectionatelier_id) ?></td>
                <td><?= h($coutures->collectionclient_id) ?></td>
                <td><?= h($coutures->atelier_client_id) ?></td>
                <td><?= h($coutures->vetement) ?></td>
                <td><?= h($coutures->photo) ?></td>
                <td><?= h($coutures->cout) ?></td>
                <td><?= h($coutures->avance) ?></td>
                <td><?= h($coutures->date_depot) ?></td>
                <td><?= h($coutures->date_retrait) ?></td>
                <td><?= h($coutures->commentaire) ?></td>
                <td><?= h($coutures->created) ?></td>
                <td><?= h($coutures->modified) ?></td>
                <td><?= h($coutures->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Coutures', 'action' => 'view', $coutures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Coutures', 'action' => 'edit', $coutures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coutures', 'action' => 'delete', $coutures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coutures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Mesures') ?></h4>
        <?php if (!empty($atelierClient->mesures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Atelier Client Id') ?></th>
                <th scope="col"><?= __('Epaule') ?></th>
                <th scope="col"><?= __('Poitrine') ?></th>
                <th scope="col"><?= __('Tour Taille') ?></th>
                <th scope="col"><?= __('Longueur Taille') ?></th>
                <th scope="col"><?= __('Tour Hanches') ?></th>
                <th scope="col"><?= __('Longueur Manche') ?></th>
                <th scope="col"><?= __('Longueur Haut') ?></th>
                <th scope="col"><?= __('Ceinture') ?></th>
                <th scope="col"><?= __('Bassin') ?></th>
                <th scope="col"><?= __('Tour Cuisse') ?></th>
                <th scope="col"><?= __('Longueur Pantalon Robe') ?></th>
                <th scope="col"><?= __('Frappe') ?></th>
                <th scope="col"><?= __('Bas') ?></th>
                <th scope="col"><?= __('Custom Field1') ?></th>
                <th scope="col"><?= __('Custom Field2') ?></th>
                <th scope="col"><?= __('Custom Field3') ?></th>
                <th scope="col"><?= __('Custom Field4') ?></th>
                <th scope="col"><?= __('Custom Field5') ?></th>
                <th scope="col"><?= __('Commentaire') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atelierClient->mesures as $mesures): ?>
            <tr>
                <td><?= h($mesures->id) ?></td>
                <td><?= h($mesures->user_id) ?></td>
                <td><?= h($mesures->atelier_id) ?></td>
                <td><?= h($mesures->atelier_client_id) ?></td>
                <td><?= h($mesures->epaule) ?></td>
                <td><?= h($mesures->poitrine) ?></td>
                <td><?= h($mesures->tour_taille) ?></td>
                <td><?= h($mesures->longueur_taille) ?></td>
                <td><?= h($mesures->tour_hanches) ?></td>
                <td><?= h($mesures->longueur_manche) ?></td>
                <td><?= h($mesures->longueur_haut) ?></td>
                <td><?= h($mesures->ceinture) ?></td>
                <td><?= h($mesures->bassin) ?></td>
                <td><?= h($mesures->tour_cuisse) ?></td>
                <td><?= h($mesures->longueur_pantalon_robe) ?></td>
                <td><?= h($mesures->frappe) ?></td>
                <td><?= h($mesures->bas) ?></td>
                <td><?= h($mesures->custom_field1) ?></td>
                <td><?= h($mesures->custom_field2) ?></td>
                <td><?= h($mesures->custom_field3) ?></td>
                <td><?= h($mesures->custom_field4) ?></td>
                <td><?= h($mesures->custom_field5) ?></td>
                <td><?= h($mesures->commentaire) ?></td>
                <td><?= h($mesures->created) ?></td>
                <td><?= h($mesures->modified) ?></td>
                <td><?= h($mesures->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Mesures', 'action' => 'view', $mesures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Mesures', 'action' => 'edit', $mesures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mesures', 'action' => 'delete', $mesures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
