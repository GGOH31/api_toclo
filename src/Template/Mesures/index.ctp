<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesure[]|\Cake\Collection\CollectionInterface $mesures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mesure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ateliers'), ['controller' => 'Ateliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier'), ['controller' => 'Ateliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atelier Clients'), ['controller' => 'AtelierClients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atelier Client'), ['controller' => 'AtelierClients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesures index large-9 medium-8 columns content">
    <h3><?= __('Mesures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coutureid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atelier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coutureclient') ?></th>
                <th scope="col"><?= $this->Paginator->sort('epaule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poitrine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_taille') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longueur_taille') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hauteur_poitrine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_hanches') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longueur_manche') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longueur_haut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ceinture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bassin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_cuisse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longueur_pantalon_robe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frappe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_field1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_field2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_field3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_field4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_field5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mesures as $mesure): ?>
            <tr>
                <td><?= $this->Number->format($mesure->id) ?></td>
                <td><?= $this->Number->format($mesure->coutureid) ?></td>
                <td><?= $mesure->has('atelier') ? $this->Html->link($mesure->atelier->id, ['controller' => 'Ateliers', 'action' => 'view', $mesure->atelier->id]) : '' ?></td>
                <td><?= $this->Number->format($mesure->client_id) ?></td>
                <td><?= $this->Number->format($mesure->coutureclient) ?></td>
                <td><?= $this->Number->format($mesure->epaule) ?></td>
                <td><?= $this->Number->format($mesure->poitrine) ?></td>
                <td><?= $this->Number->format($mesure->tour_taille) ?></td>
                <td><?= $this->Number->format($mesure->longueur_taille) ?></td>
                <td><?= h($mesure->hauteur_poitrine) ?></td>
                <td><?= $this->Number->format($mesure->tour_hanches) ?></td>
                <td><?= $this->Number->format($mesure->longueur_manche) ?></td>
                <td><?= $this->Number->format($mesure->longueur_haut) ?></td>
                <td><?= $this->Number->format($mesure->ceinture) ?></td>
                <td><?= $this->Number->format($mesure->bassin) ?></td>
                <td><?= $this->Number->format($mesure->tour_cuisse) ?></td>
                <td><?= $this->Number->format($mesure->longueur_pantalon_robe) ?></td>
                <td><?= $this->Number->format($mesure->frappe) ?></td>
                <td><?= $this->Number->format($mesure->bas) ?></td>
                <td><?= $this->Number->format($mesure->custom_field1) ?></td>
                <td><?= $this->Number->format($mesure->custom_field2) ?></td>
                <td><?= $this->Number->format($mesure->custom_field3) ?></td>
                <td><?= $this->Number->format($mesure->custom_field4) ?></td>
                <td><?= $this->Number->format($mesure->custom_field5) ?></td>
                <td><?= h($mesure->created) ?></td>
                <td><?= h($mesure->modified) ?></td>
                <td><?= h($mesure->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mesure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesure->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
