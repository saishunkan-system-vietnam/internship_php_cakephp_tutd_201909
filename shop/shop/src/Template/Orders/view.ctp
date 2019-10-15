<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($order->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($order->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Addr') ?></th>
            <td><?= h($order->addr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($order->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($order->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($order->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery') ?></th>
            <td><?= $order->delivery ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $order->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Order Info') ?></h4>
        <?= $this->Text->autoParagraph(h($order->order_info)); ?>
    </div>
</div>
