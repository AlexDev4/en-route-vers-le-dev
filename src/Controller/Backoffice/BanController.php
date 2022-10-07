<?php
declare(strict_types=1);

namespace App\Controller\Backoffice;

use App\Controller\AppController;


/**
 * Ban Controller
 *
 * @property \App\Model\Table\BanTable $Ban
 * @method \App\Model\Entity\Ban[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */ 
class BanController extends AppController
{
    public function index()
    {
        $ban = $this->paginate($this->Ban);

        $this->set(compact('ban'));
    }
   
    
}
