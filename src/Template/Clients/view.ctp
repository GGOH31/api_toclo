<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectionclients'), ['controller' => 'Collectionclients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionclient'), ['controller' => 'Collectionclients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partagecollections'), ['controller' => 'Partagecollections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partagecollection'), ['controller' => 'Partagecollections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($client->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sudonim') ?></th>
            <td><?= h($client->sudonim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($client->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($client->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($client->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identifiant Client') ?></th>
            <td><?= h($client->identifiant_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Id') ?></th>
            <td><?= $this->Number->format($client->group_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($client->deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Atelier Clients') ?></h4>
        <?php if (!empty($client->atelier_clients)): ?>
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
            <?php foreach ($client->atelier_clients as $atelierClients): ?>
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
        <h4><?= __('Related Collectionclients') ?></h4>
        <?php if (!empty($client->collectionclients)): ?>
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
            <?php foreach ($client->collectionclients as $collectionclients): ?>
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
        <?php if (!empty($client->coutures)): ?>
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
            <?php foreach ($client->coutures as $coutures): ?>
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
        <h4><?= __('Related Partagecollections') ?></h4>
        <?php if (!empty($client->partagecollections)): ?>
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
            <?php foreach ($client->partagecollections as $partagecollections): ?>
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
