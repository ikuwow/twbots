<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tweets'), ['controller' => 'Tweets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tweet'), ['controller' => 'Tweets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="accounts view large-10 medium-9 columns">
    <h2><?= h($account->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $account->has('user') ? $this->Html->link($account->user->id, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Consumer Key') ?></h6>
            <p><?= h($account->consumer_key) ?></p>
            <h6 class="subheader"><?= __('Consumer Secret') ?></h6>
            <p><?= h($account->consumer_secret) ?></p>
            <h6 class="subheader"><?= __('Access Token') ?></h6>
            <p><?= h($account->access_token) ?></p>
            <h6 class="subheader"><?= __('Access Token Secret') ?></h6>
            <p><?= h($account->access_token_secret) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($account->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($account->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($account->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tweets') ?></h4>
    <?php if (!empty($account->tweets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Account Id') ?></th>
            <th><?= __('Content') ?></th>
            <th><?= __('Num Tweeted') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($account->tweets as $tweets): ?>
        <tr>
            <td><?= h($tweets->id) ?></td>
            <td><?= h($tweets->account_id) ?></td>
            <td><?= h($tweets->content) ?></td>
            <td><?= h($tweets->num_tweeted) ?></td>
            <td><?= h($tweets->created) ?></td>
            <td><?= h($tweets->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tweets', 'action' => 'view', $tweets->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tweets', 'action' => 'edit', $tweets->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tweets', 'action' => 'delete', $tweets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweets->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
