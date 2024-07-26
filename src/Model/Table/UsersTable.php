<?php
declare(strict_types=1);

namespace App\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\Utility\Security;
use CakeDC\Users\Model\Table\UsersTable as Table;

/**
 * Users Model
 *
 */
class UsersTable extends Table
{
    public function beforeRules(EventInterface $event, EntityInterface $entity, ArrayObject $options, $operation): void
    {
        if ($entity->isNew()) {
            $entity->api_token = hash('sha256', Security::randomBytes(64));
        }
    }

}
