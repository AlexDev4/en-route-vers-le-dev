<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

class BlogController extends AppController
{
    public function article($id = null, $slug=null)
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
        $articlesReco = $this->fetchTable('Articles')->find()
            ->where(['id_categories' => 1]);
        $this->set(compact('articlesReco'));
       
    }

    public function histoireInformatique()
    {
        $articlesHist = $this->fetchTable('Articles')->find()
            ->where(['id_categories' => 4]);
        $this->set(compact('articlesHist'));
    }

    public function cybersecuriteReseaux()
    {
        $articlesCyber = $this->fetchTable('Articles')->find()
            ->where(['id_categories' => 3]);
        $this->set(compact('articlesCyber'));
    }

    public function langagesProgrammation()
    {
        $articlesProg = $this->fetchTable('Articles')->find()
            ->where(['id_categories' => 2]);
        $this->set(compact('articlesProg'));
    }
}
