<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tweet Entity.
 */
class Tweet extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'account_id' => true,
        'content' => true,
        'num_tweeted' => true,
        'account' => true,
    ];
}
