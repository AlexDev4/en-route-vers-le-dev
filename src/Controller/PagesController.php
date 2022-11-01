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

use App\Model\Entity\Slider;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function home()
    {
        $sliders = $this->fetchTable('Sliders')->find('all');
        $this->set(compact('sliders'));

        $articles = $this->fetchTable('Articles')->find('all');
        $this->set(compact('articles'));

        $categories = $this->fetchTable('Categories')->find('all');
        $this->set(compact('categories'));

        //TODO : à optimiser | voir CounterCache 
        //renvoi un tableau avec le nombre de commentaire par article
        $comments = $this->fetchTable('Comments')->find('list', [
            'valueField' => 'id_articles',
            'groupField' => 'id_articles'
        ]);
        $commentsTest = $comments->toArray();
        $totalComments = sizeof($commentsTest);
        $nbComments = array();
        for ($i = 1; $i <= $totalComments; $i++) {
            $countComments = count($commentsTest[$i]);
            $nbComments[] = $countComments;
        }
        $this->set(compact('nbComments'));
    }



    public function article($id = null)
    {
    }

    public function meContacter()
    {
        $categories = $this->fetchTable('categories')->find('all');
        $this->set(compact('categories'));
    }

    public function comingSoon()
    {
        //générateur de citations aléatoires
        $this->viewBuilder()->disableAutoLayout();
        $random = rand(1, 12);
        $citations = $this->fetchTable('citations')->find()
            ->where(['id' => $random])
            ->first();
        $this->set(compact('citations'));
    }

    public function newsletters()
    {
        if ($this->getRequest()->is(['patch', 'post', 'put'])) { {
                if (!empty($this->getRequest()->getData('mailNew'))) {
                    $requestNews = $this->fetchTable('newsletters')->NewEntity($this->getRequest()->getData());
                    if ($this->fetchTable('newsletters')->save($requestNews)) {
                        $this->Flash->success(__('Votre inscription à bien été prise en compte. Merci !'));
                        return $this->redirect('/');
                    }
                    return $this->redirect('/');
                    $this->Flash->error(__('Veuillez entrer une adresse e-mail valide'));
                }
                return $this->redirect('/');
                $this->Flash->error(__('Il semble que le site rencontre un problème. Contactez-moi : alexisolive.informatique@gmail.com'));
            }
        }
    }

    public function messageContact()
    {
        if ($this->getRequest()->is(['patch', 'post', 'put'])) { {
                if (!empty($this->getRequest()->getData())) {
                    $messageNew = $this->fetchTable('contacts')->NewEntity($this->getRequest()->getData());
                    if (isset($_POST['consent'])) {
                        if ($this->fetchTable('contacts')->save($messageNew)) {
                            $this->Flash->success(__('Votre message à bien été envoyé. J\'y réponds au plus vite !'));
                            return $this->redirect('/me-contacter');
                        }
                        $this->Flash->error(__('Veuillez saisir une adresse mail valide s\'il vous plaît'));
                        return $this->redirect('/me-contacter');
                    }
                    $this->Flash->error(__('Si vous ne m\'autorisez pas à réutiliser votre mail, je ne pourrais pas vous répondre !'));
                    return $this->redirect('/me-contacter');
                }
                $this->Flash->error(__('Il semble que le site rencontre un problème. Contactez-moi : alexisolive.informatique@gmail.com'));
                return $this->redirect('/me-contacter');
            }
        }
    }
}
