<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collectionclient[]|\Cake\Collection\CollectionInterface $collectionclients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Collectionclient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collectionclients index large-9 medium-8 columns content">
    <h3><?= __('Collectionclients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modele') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($collectionclients as $collectionclient): ?>
            <tr>
                <td><?= $this->Number->format($collectionclient->id) ?></td>
                <td><?= $collectionclient->has('user') ? $this->Html->link($collectionclient->user->id, ['controller' => 'Users', 'action' => 'view', $collectionclient->user->id]) : '' ?></td>
                <td><?= $collectionclient->has('client') ? $this->Html->link($collectionclient->client->id, ['controller' => 'Clients', 'action' => 'view', $collectionclient->client->id]) : '' ?></td>
                <td><?= h($collectionclient->modele) ?></td>
                <td><?= h($collectionclient->photo) ?></td>
                <td><?= h($collectionclient->created) ?></td>
                <td><?= h($collectionclient->modified) ?></td>
                <td><?= h($collectionclient->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $collectionclient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $collectionclient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $collectionclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectionclient->id)]) ?>
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
