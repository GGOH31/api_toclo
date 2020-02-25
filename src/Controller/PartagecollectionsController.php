<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Partagecollections Controller
 *
 * @property \App\Model\Table\PartagecollectionsTable $Partagecollections
 *
 * @method \App\Model\Entity\Partagecollection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartagecollectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Users', 'Ateliers'],
        ];
        $partagecollections = $this->paginate($this->Partagecollections);

        $this->set(compact('partagecollections'));
    }

    /**
     * View method
     *
     * @param string|null $id Partagecollection id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partagecollection = $this->Partagecollections->get($id, [
            'contain' => ['Clients', 'Users', 'Ateliers'],
        ]);

        $this->set('partagecollection', $partagecollection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partagecollection = $this->Partagecollections->newEntity();
        if ($this->request->is('post')) {
            $partagecollection = $this->Partagecollections->patchEntity($partagecollection, $this->request->getData());
            if ($this->Partagecollections->save($partagecollection)) {
                $this->Flash->success(__('The partagecollection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partagecollection could not be saved. Please, try again.'));
        }
        $clients = $this->Partagecollections->Clients->find('list', ['limit' => 200]);
        $users = $this->Partagecollections->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Partagecollections->Ateliers->find('list', ['limit' => 200]);
        $this->set(compact('partagecollection', 'clients', 'users', 'ateliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partagecollection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partagecollection = $this->Partagecollections->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partagecollection = $this->Partagecollections->patchEntity($partagecollection, $this->request->getData());
            if ($this->Partagecollections->save($partagecollection)) {
                $this->Flash->success(__('The partagecollection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partagecollection could not be saved. Please, try again.'));
        }
        $clients = $this->Partagecollections->Clients->find('list', ['limit' => 200]);
        $users = $this->Partagecollections->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Partagecollections->Ateliers->find('list', ['limit' => 200]);
        $this->set(compact('partagecollection', 'clients', 'users', 'ateliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partagecollection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partagecollection = $this->Partagecollections->get($id);
        if ($this->Partagecollections->delete($partagecollection)) {
            $this->Flash->success(__('The partagecollection has been deleted.'));
        } else {
            $this->Flash->error(__('The partagecollection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
