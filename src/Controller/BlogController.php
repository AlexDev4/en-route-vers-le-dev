<?php
declare(strict_types=1);

namespace App\Controller;

    use App\Controller\AppController;

    class BlogController extends AppController
    {
        public function article($id=null){
            $articles = $this->fetchTable('Articles')->get($id);
            $this->set(compact('articles'));
    
            $categories = $this->fetchTable('categories')->find('all');
            $this->set(compact('categories'));
        }

        public function reconversion(){
            
        }
       
    }
