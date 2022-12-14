<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        if($this->getRequest()->getParam('prefix') === 'Backoffice'){
            $this->loadComponent('Authentication.Authentication');
            //$this->viewBuilder()->setLayout('backoffice');
        }

        $categories = $this->fetchTable('Categories')->find('all');
        $this->set(compact('categories'));

        $articlesFooter = $this->fetchTable('Articles')->find()
            ->order(['created' => 'DESC'])
            ->limit(5);
        $this->set(compact('articlesFooter'));
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
    }
   
    protected function onSubmitNewsletter()
    {

    }

    
}
