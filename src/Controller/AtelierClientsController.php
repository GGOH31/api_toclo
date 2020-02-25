<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AtelierClients Controller
 *
 * @property \App\Model\Table\AtelierClientsTable $AtelierClients
 *
 * @method \App\Model\Entity\AtelierClient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtelierClientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Ateliers', 'Clients'],
        ];
        $atelierClients = $this->paginate($this->AtelierClients);

        $this->set(compact('atelierClients'));
    }

    /**
     * View method
     *
     * @param string|null $id Atelier Client id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atelierClient = $this->AtelierClients->get($id, [
            'contain' => ['Users', 'Ateliers', 'Clients', 'Coutures', 'Mesures'],
        ]);

        $this->set('atelierClient', $atelierClient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atelierClient = $this->AtelierClients->newEntity();
        if ($this->request->is('post')) {
            $atelierClient = $this->AtelierClients->patchEntity($atelierClient, $this->request->getData());
            if ($this->AtelierClients->save($atelierClient)) {
                $this->Flash->success(__('The atelier client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atelier client could not be saved. Please, try again.'));
        }
        $users = $this->AtelierClients->Users->find('list', ['limit' => 200]);
        $ateliers = $this->AtelierClients->Ateliers->find('list', ['limit' => 200]);
        $clients = $this->AtelierClients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('atelierClient', 'users', 'ateliers', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atelier Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atelierClient = $this->AtelierClients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atelierClient = $this->AtelierClients->patchEntity($atelierClient, $this->request->getData());
            if ($this->AtelierClients->save($atelierClient)) {
                $this->Flash->success(__('The atelier client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atelier client could not be saved. Please, try again.'));
        }
        $users = $this->AtelierClients->Users->find('list', ['limit' => 200]);
        $ateliers = $this->AtelierClients->Ateliers->find('list', ['limit' => 200]);
        $clients = $this->AtelierClients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('atelierClient', 'users', 'ateliers', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atelier Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atelierClient = $this->AtelierClients->get($id);
        if ($this->AtelierClients->delete($atelierClient)) {
            $this->Flash->success(__('The atelier client has been deleted.'));
        } else {
            $this->Flash->error(__('The atelier client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
