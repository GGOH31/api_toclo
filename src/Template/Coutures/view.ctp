<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Couture $couture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Couture'), ['action' => 'edit', $couture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Couture'), ['action' => 'delete', $couture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coutures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Couture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['controller' => 'Collectionateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionatelier'), ['controller' => 'Collectionateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectionclients'), ['controller' => 'Collectionclients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionclient'), ['controller' => 'Collectionclients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coutures view large-9 medium-8 columns content">
    <h3><?= h($couture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $couture->has('client') ? $this->Html->link($couture->client->id, ['controller' => 'Clients', 'action' => 'view', $couture->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $couture->has('user') ? $this->Html->link($couture->user->id, ['controller' => 'Users', 'action' => 'view', $couture->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier') ?></th>
            <td><?= $couture->has('atelier') ? $this->Html->link($couture->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $couture->atelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collectionatelier') ?></th>
            <td><?= $couture->has('collectionatelier') ? $this->Html->link($couture->collectionatelier->id, ['controller' => 'Collectionateliers', 'action' => 'view', $couture->collectionatelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Collectionclient') ?></th>
            <td><?= $couture->has('collectionclient') ? $this->Html->link($couture->collectionclient->id, ['controller' => 'Collectionclients', 'action' => 'view', $couture->collectionclient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier Client') ?></th>
            <td><?= $couture->has('atelier_client') ? $this->Html->link($couture->atelier_client->id, ['controller' => 'AtelierClients', 'action' => 'view', $couture->atelier_client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vetement') ?></th>
            <td><?= h($couture->vetement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($couture->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($couture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cout') ?></th>
            <td><?= $this->Number->format($couture->cout) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avance') ?></th>
            <td><?= $this->Number->format($couture->avance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Depot') ?></th>
            <td><?= h($couture->date_depot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Retrait') ?></th>
            <td><?= h($couture->date_retrait) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($couture->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($couture->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($couture->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Commentaire') ?></h4>
        <?= $this->Text->autoParagraph(h($couture->commentaire)); ?>
    </div>
</div>
