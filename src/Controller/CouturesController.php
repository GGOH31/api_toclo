<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coutures Controller
 *
 * @property \App\Model\Table\CouturesTable $Coutures
 *
 * @method \App\Model\Entity\Couture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CouturesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Users', 'Ateliers', 'Collectionateliers', 'Collectionclients', 'AtelierClients'],
        ];
        $coutures = $this->paginate($this->Coutures);

        $this->set(compact('coutures'));
    }

    /**
     * View method
     *
     * @param string|null $id Couture id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $couture = $this->Coutures->get($id, [
            'contain' => ['Clients', 'Users', 'Ateliers', 'Collectionateliers', 'Collectionclients', 'AtelierClients'],
        ]);

        $this->set('couture', $couture);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $couture = $this->Coutures->newEntity();
        if ($this->request->is('post')) {
            $couture = $this->Coutures->patchEntity($couture, $this->request->getData());
            if ($this->Coutures->save($couture)) {
                $this->Flash->success(__('The couture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The couture could not be saved. Please, try again.'));
        }
        $clients = $this->Coutures->Clients->find('list', ['limit' => 200]);
        $users = $this->Coutures->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Coutures->Ateliers->find('list', ['limit' => 200]);
        $collectionateliers = $this->Coutures->Collectionateliers->find('list', ['limit' => 200]);
        $collectionclients = $this->Coutures->Collectionclients->find('list', ['limit' => 200]);
        $atelierClients = $this->Coutures->AtelierClients->find('list', ['limit' => 200]);
        $this->set(compact('couture', 'clients', 'users', 'ateliers', 'collectionateliers', 'collectionclients', 'atelierClients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Couture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $couture = $this->Coutures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $couture = $this->Coutures->patchEntity($couture, $this->request->getData());
            if ($this->Coutures->save($couture)) {
                $this->Flash->success(__('The couture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The couture could not be saved. Please, try again.'));
        }
        $clients = $this->Coutures->Clients->find('list', ['limit' => 200]);
        $users = $this->Coutures->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Coutures->Ateliers->find('list', ['limit' => 200]);
        $collectionateliers = $this->Coutures->Collectionateliers->find('list', ['limit' => 200]);
        $collectionclients = $this->Coutures->Collectionclients->find('list', ['limit' => 200]);
        $atelierClients = $this->Coutures->AtelierClients->find('list', ['limit' => 200]);
        $this->set(compact('couture', 'clients', 'users', 'ateliers', 'collectionateliers', 'collectionclients', 'atelierClients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Couture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $couture = $this->Coutures->get($id);
        if ($this->Coutures->delete($couture)) {
            $this->Flash->success(__('The couture has been deleted.'));
        } else {
            $this->Flash->error(__('The couture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
