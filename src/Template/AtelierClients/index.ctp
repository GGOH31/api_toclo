<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AtelierClient[]|\Cake\Collection\CollectionInterface $atelierClients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mesures'), ['controller' => 'Mesures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesure'), ['controller' => 'Mesures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atelierClients index large-9 medium-8 columns content">
    <h3><?= __('Atelier Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atelier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identifiant_client_atelier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atelierClients as $atelierClient): ?>
            <tr>
                <td><?= $this->Number->format($atelierClient->id) ?></td>
                <td><?= $atelierClient->has('user') ? $this->Html->link($atelierClient->user->id, ['controller' => 'Users', 'action' => 'view', $atelierClient->user->id]) : '' ?></td>
                <td><?= $atelierClient->has('atelier') ? $this->Html->link($atelierClient->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $atelierClient->atelier->id]) : '' ?></td>
                <td><?= $atelierClient->has('client') ? $this->Html->link($atelierClient->client->id, ['controller' => 'Clients', 'action' => 'view', $atelierClient->client->id]) : '' ?></td>
                <td><?= h($atelierClient->identifiant_client_atelier) ?></td>
                <td><?= h($atelierClient->nom) ?></td>
                <td><?= h($atelierClient->telephone) ?></td>
                <td><?= h($atelierClient->created) ?></td>
                <td><?= h($atelierClient->modified) ?></td>
                <td><?= h($atelierClient->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atelierClient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atelierClient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atelierClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atelierClient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
