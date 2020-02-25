<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partagecollection $partagecollection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partagecollection'), ['action' => 'edit', $partagecollection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partagecollection'), ['action' => 'delete', $partagecollection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partagecollection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partagecollections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partagecollection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partagecollections view large-9 medium-8 columns content">
    <h3><?= h($partagecollection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $partagecollection->has('client') ? $this->Html->link($partagecollection->client->id, ['controller' => 'Clients', 'action' => 'view', $partagecollection->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $partagecollection->has('user') ? $this->Html->link($partagecollection->user->id, ['controller' => 'Users', 'action' => 'view', $partagecollection->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier') ?></th>
            <td><?= $partagecollection->has('atelier') ? $this->Html->link($partagecollection->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $partagecollection->atelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partagecollection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origine') ?></th>
            <td><?= $this->Number->format($partagecollection->origine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($partagecollection->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($partagecollection->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($partagecollection->deleted) ?></td>
        </tr>
    </table>
</div>
