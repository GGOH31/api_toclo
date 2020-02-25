<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partagecollection[]|\Cake\Collection\CollectionInterface $partagecollections
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Partagecollection'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partagecollections index large-9 medium-8 columns content">
    <h3><?= __('Partagecollections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atelier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partagecollections as $partagecollection): ?>
            <tr>
                <td><?= $this->Number->format($partagecollection->id) ?></td>
                <td><?= $partagecollection->has('client') ? $this->Html->link($partagecollection->client->id, ['controller' => 'Clients', 'action' => 'view', $partagecollection->client->id]) : '' ?></td>
                <td><?= $partagecollection->has('user') ? $this->Html->link($partagecollection->user->id, ['controller' => 'Users', 'action' => 'view', $partagecollection->user->id]) : '' ?></td>
                <td><?= $partagecollection->has('atelier') ? $this->Html->link($partagecollection->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $partagecollection->atelier->id]) : '' ?></td>
                <td><?= $this->Number->format($partagecollection->origine) ?></td>
                <td><?= h($partagecollection->created) ?></td>
                <td><?= h($partagecollection->modified) ?></td>
                <td><?= h($partagecollection->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partagecollection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partagecollection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partagecollection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partagecollection->id)]) ?>
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
