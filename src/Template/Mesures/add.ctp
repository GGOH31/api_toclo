<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesure $mesure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mesures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesures form large-9 medium-8 columns content">
    <?= $this->Form->create($mesure) ?>
    <fieldset>
        <legend><?= __('Add Mesure') ?></legend>
        <?php
            echo $this->Form->control('coutureid');
            echo $this->Form->control('atelier_id', ['options' => $ateliers, 'empty' => true]);
            echo $this->Form->control('client_id');
            echo $this->Form->control('coutureclient');
            echo $this->Form->control('epaule');
            echo $this->Form->control('poitrine');
            echo $this->Form->control('tour_taille');
            echo $this->Form->control('longueur_taille');
            echo $this->Form->control('hauteur_poitrine');
            echo $this->Form->control('tour_hanches');
            echo $this->Form->control('longueur_manche');
            echo $this->Form->control('longueur_haut');
            echo $this->Form->control('ceinture');
            echo $this->Form->control('bassin');
            echo $this->Form->control('tour_cuisse');
            echo $this->Form->control('longueur_pantalon_robe');
            echo $this->Form->control('frappe');
            echo $this->Form->control('bas');
            echo $this->Form->control('custom_field1');
            echo $this->Form->control('custom_field2');
            echo $this->Form->control('custom_field3');
            echo $this->Form->control('custom_field4');
            echo $this->Form->control('custom_field5');
            echo $this->Form->control('commentaire');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
