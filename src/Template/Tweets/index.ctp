<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tweet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tweets index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('account_id') ?></th>
            <th><?= $this->Paginator->sort('content') ?></th>
            <th><?= $this->Paginator->sort('num_tweeted') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tweets as $tweet): ?>
        <tr>
            <td><?= $this->Number->format($tweet->id) ?></td>
            <td>
                <?= $tweet->has('account') ? $this->Html->link($tweet->account->id, ['controller' => 'Accounts', 'action' => 'view', $tweet->account->id]) : '' ?>
            </td>
            <td><?= h($tweet->content) ?></td>
            <td><?= $this->Number->format($tweet->num_tweeted) ?></td>
            <td><?= h($tweet->created) ?></td>
            <td><?= h($tweet->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tweet->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tweet->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?>
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
