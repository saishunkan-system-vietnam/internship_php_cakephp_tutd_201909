<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bill'), ['action' => 'edit', $bill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bill'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bills view large-9 medium-8 columns content">
    <h3><?= h($bill->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $bill->has('order') ? $this->Html->link($bill->order->id, ['controller' => 'Orders', 'action' => 'view', $bill->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($bill->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($bill->total) ?></td>
        </tr>
    </table>
</div>
