<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersclient[]|\Cake\Collection\CollectionInterface $usersclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usersclient'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersclient index large-9 medium-8 columns content">
    <h3><?= __('Usersclient') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersclient as $usersclient): ?>
            <tr>
                <td><?= $this->Number->format($usersclient->id) ?></td>
                <td><?= h($usersclient->name) ?></td>
                <td><?= h($usersclient->email) ?></td>
                <td><?= h($usersclient->password) ?></td>
                <td><?= h($usersclient->created) ?></td>
                <td><?= h($usersclient->update_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersclient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersclient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersclient->id)]) ?>
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
