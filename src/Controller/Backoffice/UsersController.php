<?php

namespace App\Controller\Backoffice;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use App\Model\Entity\User;
use Cake\ORM\TableRegistry;



class UsersController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function banned()
    {
        $ipUser = $_SERVER['REMOTE_ADDR'];
        $this->loadModel('Ban');
        $banned = $this->fetchTable('Ban')->find()->all();
        $listBanned = $banned->toList();
        foreach ($listBanned as $banni) {
            if ($banni->adress == $ipUser) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function login()
    {
        $ipUser = $_SERVER['REMOTE_ADDR'];
        $error = (int) 0;
        $this->viewBuilder()->setLayout('connexion');
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        if ($result->isValid() && $this->banned() == true) {
            return $this->redirect('/backoffice/dashboard');
        } else if ($this->banned() == false) {
            $this->redirect('/');
        }
        if ($this->request->is('post') && !$result->isValid()) 
        {
            if ($_SERVER['REMOTE_ADDR'] == $ipUser) 
            {
                for($error = 0; ;)
                {
                    if($error < 5)
                    {
                        $this->Flash->error(__('Votre identifiant ou votre mot de passe est incorrect. Il vous reste ' . 5 - $error . ' tentatives avant blocage de votre IP'));
                        ++$error;
                    }
                    else 
                    {
                        $this->Flash->error(__('Vous avez échoué à cinq tentatives de vous connecter. Votre IP est désormais bloquée. Contactez l\'administrateur du site.'));
                        $ban = $this->fetchTable('Ban')->newEntity([
                        'adress' => $_SERVER['REMOTE_ADDR']
                        ]);
                        $ban = $this->Ban->save($ban);
                    }
                }
            }
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect('/');
        }
    }


    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect('/backoffice');
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'roles'));
    }
}
