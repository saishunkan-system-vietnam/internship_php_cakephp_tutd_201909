<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersclient $usersclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usersclient'), ['action' => 'edit', $usersclient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usersclient'), ['action' => 'delete', $usersclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersclient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usersclient'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usersclient'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersclient view large-9 medium-8 columns content">
    <h3><?= h($usersclient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($usersclient->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usersclient->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usersclient->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersclient->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usersclient->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update At') ?></th>
            <td><?= h($usersclient->update_at) ?></td>
        </tr>
    </table>
</div>
