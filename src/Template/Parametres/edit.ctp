<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parametre $parametre
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parametre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parametre->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parametres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parametres form large-9 medium-8 columns content">
    <?= $this->Form->create($parametre) ?>
    <fieldset>
        <legend><?= __('Edit Parametre') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('atelier_id', ['options' => $ateliers, 'empty' => true]);
            echo $this->Form->control('unite_mesure');
            echo $this->Form->control('arriere_plan');
            echo $this->Form->control('design');
            echo $this->Form->control('visibilite');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
