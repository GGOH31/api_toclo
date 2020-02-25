<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collectionclients'), ['controller' => 'Collectionclients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collectionclient'), ['controller' => 'Collectionclients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partagecollections'), ['controller' => 'Partagecollections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partagecollection'), ['controller' => 'Partagecollections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Edit Client') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('sudonim');
            echo $this->Form->control('email');
            echo $this->Form->control('telephone');
            echo $this->Form->control('photo');
            echo $this->Form->control('group_id');
            echo $this->Form->control('password');
            echo $this->Form->control('identifiant_client');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
