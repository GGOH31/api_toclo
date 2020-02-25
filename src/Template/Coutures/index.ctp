<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Couture[]|\Cake\Collection\CollectionInterface $coutures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['controller' => 'Collectionateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collectionatelier'), ['controller' => 'Collectionateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collectionclients'), ['controller' => 'Collectionclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collectionclient'), ['controller' => 'Collectionclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coutures index large-9 medium-8 columns content">
    <h3><?= __('Coutures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atelier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collectionatelier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collectionclient_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atelier_client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vetement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cout') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_depot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_retrait') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coutures as $couture): ?>
            <tr>
                <td><?= $this->Number->format($couture->id) ?></td>
                <td><?= $couture->has('client') ? $this->Html->link($couture->client->id, ['controller' => 'Clients', 'action' => 'view', $couture->client->id]) : '' ?></td>
                <td><?= $couture->has('user') ? $this->Html->link($couture->user->id, ['controller' => 'Users', 'action' => 'view', $couture->user->id]) : '' ?></td>
                <td><?= $couture->has('atelier') ? $this->Html->link($couture->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $couture->atelier->id]) : '' ?></td>
                <td><?= $couture->has('collectionatelier') ? $this->Html->link($couture->collectionatelier->id, ['controller' => 'Collectionateliers', 'action' => 'view', $couture->collectionatelier->id]) : '' ?></td>
                <td><?= $couture->has('collectionclient') ? $this->Html->link($couture->collectionclient->id, ['controller' => 'Collectionclients', 'action' => 'view', $couture->collectionclient->id]) : '' ?></td>
                <td><?= $couture->has('atelier_client') ? $this->Html->link($couture->atelier_client->id, ['controller' => 'AtelierClients', 'action' => 'view', $couture->atelier_client->id]) : '' ?></td>
                <td><?= h($couture->vetement) ?></td>
                <td><?= h($couture->photo) ?></td>
                <td><?= $this->Number->format($couture->cout) ?></td>
                <td><?= $this->Number->format($couture->avance) ?></td>
                <td><?= h($couture->date_depot) ?></td>
                <td><?= h($couture->date_retrait) ?></td>
                <td><?= h($couture->created) ?></td>
                <td><?= h($couture->modified) ?></td>
                <td><?= h($couture->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $couture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $couture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $couture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couture->id)]) ?>
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
