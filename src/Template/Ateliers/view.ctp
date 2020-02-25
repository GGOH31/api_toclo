<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atelier $atelier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Atelier'), ['action' => 'edit', $atelier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Atelier'), ['action' => 'delete', $atelier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atelier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['controller' => 'Collectionateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionatelier'), ['controller' => 'Collectionateliers', 'action' => 'add']) ?> </li>
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
<div class="ateliers view large-9 medium-8 columns content">
    <h3><?= h($atelier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Denomination') ?></th>
            <td><?= h($atelier->denomination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialite') ?></th>
            <td><?= h($atelier->specialite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($atelier->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quartier') ?></th>
            <td><?= h($atelier->quartier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($atelier->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($atelier->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($atelier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($atelier->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($atelier->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($atelier->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($atelier->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Precision') ?></h4>
        <?= $this->Text->autoParagraph(h($atelier->precision)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($atelier->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Atelier Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Contact') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($atelier->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->atelier_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->contact) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Atelier Clients') ?></h4>
        <?php if (!empty($atelier->atelier_clients)): ?>
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
            <?php foreach ($atelier->atelier_clients as $atelierClients): ?>
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
        <?php if (!empty($atelier->collectionateliers)): ?>
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
            <?php foreach ($atelier->collectionateliers as $collectionateliers): ?>
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
        <h4><?= __('Related Coutures') ?></h4>
        <?php if (!empty($atelier->coutures)): ?>
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
            <?php foreach ($atelier->coutures as $coutures): ?>
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
        <?php if (!empty($atelier->mesures)): ?>
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
            <?php foreach ($atelier->mesures as $mesures): ?>
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
        <?php if (!empty($atelier->parametres)): ?>
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
            <?php foreach ($atelier->parametres as $parametres): ?>
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
        <?php if (!empty($atelier->partagecollections)): ?>
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
            <?php foreach ($atelier->partagecollections as $partagecollections): ?>
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
