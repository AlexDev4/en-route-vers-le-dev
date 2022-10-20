<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

class BlogController extends AppController
{
    public function article($id = null)
    {

        $articles = $this->fetchTable('Articles')->get($id);
        $this->set(compact('articles'));

        $categories = $this->fetchTable('categories')->find();
        $categories->where(['Categories.id' => $id]);
        $categorie = $categories->first();
        $this->set(compact('categorie'));


        $comments = $this->fetchTable('Comments')->find()
            ->where(['Comments.id_articles' => $id]);
        $this->set(compact('comments'));
    }

    public function reconversion()
    {
    }

    public function histoireInformatique()
    {
    }

    public function cybersecuriteReseaux()
    {
    }

    public function langagesProgrammation()
    {
    }
}
