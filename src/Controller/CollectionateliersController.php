<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Collectionateliers Controller
 *
 * @property \App\Model\Table\CollectionateliersTable $Collectionateliers
 *
 * @method \App\Model\Entity\Collectionatelier[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollectionateliersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Ateliers'],
        ];
        $collectionateliers = $this->paginate($this->Collectionateliers);

        $this->set(compact('collectionateliers'));
    }

    /**
     * View method
     *
     * @param string|null $id Collectionatelier id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collectionatelier = $this->Collectionateliers->get($id, [
            'contain' => ['Users', 'Ateliers', 'Coutures'],
        ]);

        $this->set('collectionatelier', $collectionatelier);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collectionatelier = $this->Collectionateliers->newEntity();
        if ($this->request->is('post')) {
            $collectionatelier = $this->Collectionateliers->patchEntity($collectionatelier, $this->request->getData());
            if ($this->Collectionateliers->save($collectionatelier)) {
                $this->Flash->success(__('The collectionatelier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collectionatelier could not be saved. Please, try again.'));
        }
        $users = $this->Collectionateliers->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Collectionateliers->Ateliers->find('list', ['limit' => 200]);
        $this->set(compact('collectionatelier', 'users', 'ateliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Collectionatelier id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collectionatelier = $this->Collectionateliers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collectionatelier = $this->Collectionateliers->patchEntity($collectionatelier, $this->request->getData());
            if ($this->Collectionateliers->save($collectionatelier)) {
                $this->Flash->success(__('The collectionatelier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collectionatelier could not be saved. Please, try again.'));
        }
        $users = $this->Collectionateliers->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Collectionateliers->Ateliers->find('list', ['limit' => 200]);
        $this->set(compact('collectionatelier', 'users', 'ateliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Collectionatelier id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collectionatelier = $this->Collectionateliers->get($id);
        if ($this->Collectionateliers->delete($collectionatelier)) {
            $this->Flash->success(__('The collectionatelier has been deleted.'));
        } else {
            $this->Flash->error(__('The collectionatelier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
