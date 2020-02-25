<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametre[]|\Cake\Collection\CollectionInterface $parametres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parametre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parametres index large-9 medium-8 columns content">
    <h3><?= __('Parametres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atelier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unite_mesure') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arriere_plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('design') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visibilite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parametres as $parametre): ?>
            <tr>
                <td><?= $this->Number->format($parametre->id) ?></td>
                <td><?= $parametre->has('user') ? $this->Html->link($parametre->user->id, ['controller' => 'Users', 'action' => 'view', $parametre->user->id]) : '' ?></td>
                <td><?= $parametre->has('atelier') ? $this->Html->link($parametre->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $parametre->atelier->id]) : '' ?></td>
                <td><?= $this->Number->format($parametre->unite_mesure) ?></td>
                <td><?= h($parametre->arriere_plan) ?></td>
                <td><?= h($parametre->design) ?></td>
                <td><?= h($parametre->visibilite) ?></td>
                <td><?= h($parametre->created) ?></td>
                <td><?= h($parametre->modified) ?></td>
                <td><?= h($parametre->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parametre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parametre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parametre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametre->id)]) ?>
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
