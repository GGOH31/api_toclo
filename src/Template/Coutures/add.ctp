<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Couture $couture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['action' => 'index']) ?></li>
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
<div class="coutures form large-9 medium-8 columns content">
    <?= $this->Form->create($couture) ?>
    <fieldset>
        <legend><?= __('Add Couture') ?></legend>
        <?php
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('atelier_id', ['options' => $ateliers]);
            echo $this->Form->control('collectionatelier_id', ['options' => $collectionateliers, 'empty' => true]);
            echo $this->Form->control('collectionclient_id', ['options' => $collectionclients, 'empty' => true]);
            echo $this->Form->control('atelier_client_id', ['options' => $atelierClients]);
            echo $this->Form->control('vetement');
            echo $this->Form->control('photo');
            echo $this->Form->control('cout');
            echo $this->Form->control('avance');
            echo $this->Form->control('date_depot', ['empty' => true]);
            echo $this->Form->control('date_retrait', ['empty' => true]);
            echo $this->Form->control('commentaire');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
