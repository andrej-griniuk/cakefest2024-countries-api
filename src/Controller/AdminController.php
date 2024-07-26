<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{
    use \Crud\Controller\ControllerTrait;

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Crud.Crud', [
            'actions' => ['Crud.Index', 'Crud.View', 'Crud.Add', 'Crud.Edit', 'Crud.Delete'],
            'listeners' => ['CrudView.View', 'Crud.Redirect', 'Crud.RelatedModels']
        ]);

        $this->Crud->action()->setConfig('scaffold.tables', ['users', 'countries', 'cities']);
        $this->Crud->action()->setConfig('scaffold.fields_blacklist', ['password']);

        $this->loadComponent('Authentication.Authentication', ['requireIdentity' => true]);

        if (!$this->Authentication->getIdentityData('is_superuser')) {
            throw new UnauthorizedException();
        }
    }

    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        $this->viewBuilder()->setClassName('CrudView\View\CrudView');
    }

}
