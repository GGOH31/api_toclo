<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collectionatelier $collectionatelier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Collectionatelier'), ['action' => 'edit', $collectionatelier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Collectionatelier'), ['action' => 'delete', $collectionatelier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectionatelier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collectionatelier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="collectionateliers view large-9 medium-8 columns content">
    <h3><?= h($collectionatelier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $collectionatelier->has('user') ? $this->Html->link($collectionatelier->user->id, ['controller' => 'Users', 'action' => 'view', $collectionatelier->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atelier') ?></th>
            <td><?= $collectionatelier->has('atelier') ? $this->Html->link($collectionatelier->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $collectionatelier->atelier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modele') ?></th>
            <td><?= h($collectionatelier->modele) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($collectionatelier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($collectionatelier->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($collectionatelier->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($collectionatelier->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($collectionatelier->photo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($collectionatelier->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coutures') ?></h4>
        <?php if (!empty($collectionatelier->coutures)): ?>
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
            <?php foreach ($collectionatelier->coutures as $coutures): ?>
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
</div>
