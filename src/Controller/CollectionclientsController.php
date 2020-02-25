<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Collectionclients Controller
 *
 * @property \App\Model\Table\CollectionclientsTable $Collectionclients
 *
 * @method \App\Model\Entity\Collectionclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollectionclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Clients'],
        ];
        $collectionclients = $this->paginate($this->Collectionclients);

        $this->set(compact('collectionclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Collectionclient id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collectionclient = $this->Collectionclients->get($id, [
            'contain' => ['Users', 'Clients', 'Coutures'],
        ]);

        $this->set('collectionclient', $collectionclient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collectionclient = $this->Collectionclients->newEntity();
        if ($this->request->is('post')) {
            $collectionclient = $this->Collectionclients->patchEntity($collectionclient, $this->request->getData());
            if ($this->Collectionclients->save($collectionclient)) {
                $this->Flash->success(__('The collectionclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collectionclient could not be saved. Please, try again.'));
        }
        $users = $this->Collectionclients->Users->find('list', ['limit' => 200]);
        $clients = $this->Collectionclients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('collectionclient', 'users', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Collectionclient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collectionclient = $this->Collectionclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collectionclient = $this->Collectionclients->patchEntity($collectionclient, $this->request->getData());
            if ($this->Collectionclients->save($collectionclient)) {
                $this->Flash->success(__('The collectionclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collectionclient could not be saved. Please, try again.'));
        }
        $users = $this->Collectionclients->Users->find('list', ['limit' => 200]);
        $clients = $this->Collectionclients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('collectionclient', 'users', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Collectionclient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collectionclient = $this->Collectionclients->get($id);
        if ($this->Collectionclients->delete($collectionclient)) {
            $this->Flash->success(__('The collectionclient has been deleted.'));
        } else {
            $this->Flash->error(__('The collectionclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
