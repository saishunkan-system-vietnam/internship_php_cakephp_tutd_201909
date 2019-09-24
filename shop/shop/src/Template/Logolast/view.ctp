<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logolast $logolast
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logolast'), ['action' => 'edit', $logolast->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logolast'), ['action' => 'delete', $logolast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logolast->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logolast'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logolast'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logolast view large-9 medium-8 columns content">
    <h3><?= h($logolast->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($logolast->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($logolast->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($logolast->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logolast->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logolast->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modifind') ?></th>
            <td><?= h($logolast->modifind) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $logolast->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
