<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atelier[]|\Cake\Collection\CollectionInterface $ateliers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['controller' => 'Collectionateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collectionatelier'), ['controller' => 'Collectionateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mesures'), ['controller' => 'Mesures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesure'), ['controller' => 'Mesures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parametres'), ['controller' => 'Parametres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parametre'), ['controller' => 'Parametres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partagecollections'), ['controller' => 'Partagecollections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partagecollection'), ['controller' => 'Partagecollections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ateliers index large-9 medium-8 columns content">
    <h3><?= __('Ateliers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('denomination') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quartier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ateliers as $atelier): ?>
            <tr>
                <td><?= $this->Number->format($atelier->id) ?></td>
                <td><?= $this->Number->format($atelier->user_id) ?></td>
                <td><?= h($atelier->denomination) ?></td>
                <td><?= h($atelier->specialite) ?></td>
                <td><?= h($atelier->ville) ?></td>
                <td><?= h($atelier->quartier) ?></td>
                <td><?= h($atelier->telephone) ?></td>
                <td><?= h($atelier->photo) ?></td>
                <td><?= h($atelier->created) ?></td>
                <td><?= h($atelier->modified) ?></td>
                <td><?= h($atelier->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atelier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atelier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atelier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atelier->id)]) ?>
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
