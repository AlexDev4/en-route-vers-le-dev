<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Newsletters Controller
 *
 * @property \App\Model\Table\NewslettersTable $Newsletters
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewslettersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $newsletters = $this->paginate($this->Newsletters);

        $this->set(compact('newsletters'));
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('newsletter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsletter = $this->Newsletters->newEmptyEntity();
        if ($this->request->is('post')) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The newsletter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletter = $this->Newsletters->get($id);
        if ($this->Newsletters->delete($newsletter)) {
            $this->Flash->success(__('The newsletter has been deleted.'));
        } else {
            $this->Flash->error(__('The newsletter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
