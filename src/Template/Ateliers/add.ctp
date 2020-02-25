<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atelier $atelier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['action' => 'index']) ?></li>
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
<div class="ateliers form large-9 medium-8 columns content">
    <?= $this->Form->create($atelier) ?>
    <fieldset>
        <legend><?= __('Add Atelier') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('denomination');
            echo $this->Form->control('specialite');
            echo $this->Form->control('ville');
            echo $this->Form->control('quartier');
            echo $this->Form->control('precision');
            echo $this->Form->control('telephone');
            echo $this->Form->control('photo');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
