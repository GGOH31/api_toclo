<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['controller' => 'Collectionateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionatelier'), ['controller' => 'Collectionateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectionclients'), ['controller' => 'Collectionclients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionclient'), ['controller' => 'Collectionclients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mesures'), ['controller' => 'Mesures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesure'), ['controller' => 'Mesures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parametres'), ['controller' => 'Parametres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parametre'), ['controller' => 'Parametres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partagecollections'), ['controller' => 'Partagecollections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partagecollection'), ['controller' => 'Partagecollections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= h($user->contact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier Id') ?></th>
            <td><?= $this->Number->format($user->atelier_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($user->deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ateliers') ?></h4>
        <?php if (!empty($user->ateliers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Denomination') ?></th>
                <th scope="col"><?= __('Specialite') ?></th>
                <th scope="col"><?= __('Ville') ?></th>
                <th scope="col"><?= __('Quartier') ?></th>
                <th scope="col"><?= __('Precision') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->ateliers as $ateliers): ?>
            <tr>
                <td><?= h($ateliers->id) ?></td>
                <td><?= h($ateliers->user_id) ?></td>
                <td><?= h($ateliers->denomination) ?></td>
                <td><?= h($ateliers->specialite) ?></td>
                <td><?= h($ateliers->ville) ?></td>
                <td><?= h($ateliers->quartier) ?></td>
                <td><?= h($ateliers->precision) ?></td>
                <td><?= h($ateliers->telephone) ?></td>
                <td><?= h($ateliers->photo) ?></td>
                <td><?= h($ateliers->created) ?></td>
                <td><?= h($ateliers->modified) ?></td>
                <td><?= h($ateliers->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ateliers', 'action' => 'view', $ateliers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ateliers', 'action' => 'edit', $ateliers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ateliers', 'action' => 'delete', $ateliers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ateliers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Atelier Clients') ?></h4>
        <?php if (!empty($user->atelier_clients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Identifiant Client Atelier') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->atelier_clients as $atelierClients): ?>
            <tr>
                <td><?= h($atelierClients->id) ?></td>
                <td><?= h($atelierClients->user_id) ?></td>
                <td><?= h($atelierClients->atelier_id) ?></td>
                <td><?= h($atelierClients->client_id) ?></td>
                <td><?= h($atelierClients->identifiant_client_atelier) ?></td>
                <td><?= h($atelierClients->nom) ?></td>
                <td><?= h($atelierClients->telephone) ?></td>
                <td><?= h($atelierClients->photo) ?></td>
                <td><?= h($atelierClients->created) ?></td>
                <td><?= h($atelierClients->modified) ?></td>
                <td><?= h($atelierClients->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AtelierClients', 'action' => 'view', $atelierClients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AtelierClients', 'action' => 'edit', $atelierClients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AtelierClients', 'action' => 'delete', $atelierClients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atelierClients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Collectionateliers') ?></h4>
        <?php if (!empty($user->collectionateliers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Modele') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->collectionateliers as $collectionateliers): ?>
            <tr>
                <td><?= h($collectionateliers->id) ?></td>
                <td><?= h($collectionateliers->user_id) ?></td>
                <td><?= h($collectionateliers->atelier_id) ?></td>
                <td><?= h($collectionateliers->modele) ?></td>
                <td><?= h($collectionateliers->photo) ?></td>
                <td><?= h($collectionateliers->description) ?></td>
                <td><?= h($collectionateliers->created) ?></td>
                <td><?= h($collectionateliers->modified) ?></td>
                <td><?= h($collectionateliers->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Collectionateliers', 'action' => 'view', $collectionateliers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Collectionateliers', 'action' => 'edit', $collectionateliers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Collectionateliers', 'action' => 'delete', $collectionateliers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectionateliers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Collectionclients') ?></h4>
        <?php if (!empty($user->collectionclients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Modele') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->collectionclients as $collectionclients): ?>
            <tr>
                <td><?= h($collectionclients->id) ?></td>
                <td><?= h($collectionclients->user_id) ?></td>
                <td><?= h($collectionclients->client_id) ?></td>
                <td><?= h($collectionclients->modele) ?></td>
                <td><?= h($collectionclients->photo) ?></td>
                <td><?= h($collectionclients->description) ?></td>
                <td><?= h($collectionclients->created) ?></td>
                <td><?= h($collectionclients->modified) ?></td>
                <td><?= h($collectionclients->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Collectionclients', 'action' => 'view', $collectionclients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Collectionclients', 'action' => 'edit', $collectionclients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Collectionclients', 'action' => 'delete', $collectionclients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectionclients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coutures') ?></h4>
        <?php if (!empty($user->coutures)): ?>
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
            <?php foreach ($user->coutures as $coutures): ?>
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
        <?php if (!empty($user->mesures)): ?>
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
            <?php foreach ($user->mesures as $mesures): ?>
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
    <div class="related">
        <h4><?= __('Related Parametres') ?></h4>
        <?php if (!empty($user->parametres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Unite Mesure') ?></th>
                <th scope="col"><?= __('Arriere Plan') ?></th>
                <th scope="col"><?= __('Design') ?></th>
                <th scope="col"><?= __('Visibilite') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->parametres as $parametres): ?>
            <tr>
                <td><?= h($parametres->id) ?></td>
                <td><?= h($parametres->user_id) ?></td>
                <td><?= h($parametres->atelier_id) ?></td>
                <td><?= h($parametres->unite_mesure) ?></td>
                <td><?= h($parametres->arriere_plan) ?></td>
                <td><?= h($parametres->design) ?></td>
                <td><?= h($parametres->visibilite) ?></td>
                <td><?= h($parametres->created) ?></td>
                <td><?= h($parametres->modified) ?></td>
                <td><?= h($parametres->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Parametres', 'action' => 'view', $parametres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Parametres', 'action' => 'edit', $parametres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Parametres', 'action' => 'delete', $parametres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Partagecollections') ?></h4>
        <?php if (!empty($user->partagecollections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Origine') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->partagecollections as $partagecollections): ?>
            <tr>
                <td><?= h($partagecollections->id) ?></td>
                <td><?= h($partagecollections->client_id) ?></td>
                <td><?= h($partagecollections->user_id) ?></td>
                <td><?= h($partagecollections->atelier_id) ?></td>
                <td><?= h($partagecollections->origine) ?></td>
                <td><?= h($partagecollections->created) ?></td>
                <td><?= h($partagecollections->modified) ?></td>
                <td><?= h($partagecollections->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Partagecollections', 'action' => 'view', $partagecollections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Partagecollections', 'action' => 'edit', $partagecollections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Partagecollections', 'action' => 'delete', $partagecollections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partagecollections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
