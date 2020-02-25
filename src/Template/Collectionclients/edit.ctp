<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collectionclient $collectionclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $collectionclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $collectionclient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Collectionclients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collectionclients form large-9 medium-8 columns content">
    <?= $this->Form->create($collectionclient) ?>
    <fieldset>
        <legend><?= __('Edit Collectionclient') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('client_id', ['options' => $clients]);
            echo $this->Form->control('modele');
            echo $this->Form->control('photo');
            echo $this->Form->control('description');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
