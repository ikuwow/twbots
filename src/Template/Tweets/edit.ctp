<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tweet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tweets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tweets form large-10 medium-9 columns">
    <?= $this->Form->create($tweet); ?>
    <fieldset>
        <legend><?= __('Edit Tweet') ?></legend>
        <?php
            echo $this->Form->input('account_id', ['options' => $accounts]);
            echo $this->Form->input('content');
            echo $this->Form->input('num_tweeted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
