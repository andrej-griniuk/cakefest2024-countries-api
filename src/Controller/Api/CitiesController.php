<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\ApiController;
use Cake\Event\Event;

/**
 * Cities Controller
 *
 * @property \App\Model\Table\CitiesTable $Cities
 */
class CitiesController extends ApiController
{
    public function index()
    {
        $this->Crud->on('beforePaginate', function (Event $event) {
            if ($countryId = $this->request->getParam('country_id')) {
                $event->getSubject()->query->where(['country_id' => $countryId]);
            }
        });

        return $this->Crud->execute();
    }
}
