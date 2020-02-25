<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partagecollection $partagecollection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $partagecollection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $partagecollection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Partagecollections'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partagecollections form large-9 medium-8 columns content">
    <?= $this->Form->create($partagecollection) ?>
    <fieldset>
        <legend><?= __('Edit Partagecollection') ?></legend>
        <?php
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('atelier_id', ['options' => $ateliers, 'empty' => true]);
            echo $this->Form->control('origine');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
