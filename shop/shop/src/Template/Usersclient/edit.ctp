<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersclient $usersclient
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersclient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usersclient'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usersclient form large-9 medium-8 columns content">
    <?= $this->Form->create($usersclient) ?>
    <fieldset>
        <legend><?= __('Edit Usersclient') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('update_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
