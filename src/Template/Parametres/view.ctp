<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametre $parametre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parametre'), ['action' => 'edit', $parametre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parametre'), ['action' => 'delete', $parametre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parametres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parametre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parametres view large-9 medium-8 columns content">
    <h3><?= h($parametre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $parametre->has('user') ? $this->Html->link($parametre->user->id, ['controller' => 'Users', 'action' => 'view', $parametre->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier') ?></th>
            <td><?= $parametre->has('atelier') ? $this->Html->link($parametre->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $parametre->atelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arriere Plan') ?></th>
            <td><?= h($parametre->arriere_plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Design') ?></th>
            <td><?= h($parametre->design) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visibilite') ?></th>
            <td><?= h($parametre->visibilite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($parametre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unite Mesure') ?></th>
            <td><?= $this->Number->format($parametre->unite_mesure) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($parametre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($parametre->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($parametre->deleted) ?></td>
        </tr>
    </table>
</div>
