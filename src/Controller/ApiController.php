<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Api Controller
 *
 */
class ApiController extends AppController
{
    use \Crud\Controller\ControllerTrait;

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.View',
            ],
            'listeners' => [
                'Crud.Api',
                'Crud.ApiPagination',
            ]
        ]);

        $this->loadComponent('Authentication.Authentication', ['requireIdentity' => true]);
    }

}
