<?php
    namespace App\Controller\Backoffice;

    use App\Controller\AppController;

    class DashboardController extends AppController
    {
        public function index()
        {
            $this->viewBuilder()->setLayout('backoffice');
        }
    }