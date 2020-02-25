<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AtelierClient $atelierClient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atelierClient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atelierClient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mesures'), ['controller' => 'Mesures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesure'), ['controller' => 'Mesures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atelierClients form large-9 medium-8 columns content">
    <?= $this->Form->create($atelierClient) ?>
    <fieldset>
        <legend><?= __('Edit Atelier Client') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('atelier_id', ['options' => $ateliers]);
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            echo $this->Form->control('identifiant_client_atelier');
            echo $this->Form->control('nom');
            echo $this->Form->control('telephone');
            echo $this->Form->control('photo');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
