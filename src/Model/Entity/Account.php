<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity.
 */
class Account extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'consumer_key' => true,
        'consumer_secret' => true,
        'access_token' => true,
        'access_token_secret' => true,
        'user' => true,
        'tweets' => true,
    ];
}
