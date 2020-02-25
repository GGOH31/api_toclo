<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collectionatelier $collectionatelier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Collectionateliers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coutures'), ['controller' => 'Coutures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Couture'), ['controller' => 'Coutures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collectionateliers form large-9 medium-8 columns content">
    <?= $this->Form->create($collectionatelier) ?>
    <fieldset>
        <legend><?= __('Add Collectionatelier') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('atelier_id', ['options' => $ateliers]);
            echo $this->Form->control('modele');
            echo $this->Form->control('photo');
            echo $this->Form->control('description');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
