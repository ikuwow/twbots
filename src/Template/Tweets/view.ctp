<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tweet'), ['action' => 'edit', $tweet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tweet'), ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tweets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tweet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tweets view large-10 medium-9 columns">
    <h2><?= h($tweet->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Account') ?></h6>
            <p><?= $tweet->has('account') ? $this->Html->link($tweet->account->id, ['controller' => 'Accounts', 'action' => 'view', $tweet->account->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Content') ?></h6>
            <p><?= h($tweet->content) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tweet->id) ?></p>
            <h6 class="subheader"><?= __('Num Tweeted') ?></h6>
            <p><?= $this->Number->format($tweet->num_tweeted) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tweet->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tweet->modified) ?></p>
        </div>
    </div>
</div>
