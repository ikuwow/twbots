<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tweets'), ['controller' => 'Tweets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tweet'), ['controller' => 'Tweets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="accounts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('consumer_key') ?></th>
            <th><?= $this->Paginator->sort('consumer_secret') ?></th>
            <th><?= $this->Paginator->sort('access_token') ?></th>
            <th><?= $this->Paginator->sort('access_token_secret') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($accounts as $account): ?>
        <tr>
            <td><?= $this->Number->format($account->id) ?></td>
            <td>
                <?= $account->has('user') ? $this->Html->link($account->user->id, ['controller' => 'Users', 'action' => 'view', $account->user->id]) : '' ?>
            </td>
            <td><?= h($account->consumer_key) ?></td>
            <td><?= h($account->consumer_secret) ?></td>
            <td><?= h($account->access_token) ?></td>
            <td><?= h($account->access_token_secret) ?></td>
            <td><?= h($account->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
