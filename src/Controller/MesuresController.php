<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mesures Controller
 *
 * @property \App\Model\Table\MesuresTable $Mesures
 *
 * @method \App\Model\Entity\Mesure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MesuresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Ateliers', 'AtelierClients'],
        ];
        $mesures = $this->paginate($this->Mesures);

        $this->set(compact('mesures'));
    }

    /**
     * View method
     *
     * @param string|null $id Mesure id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mesure = $this->Mesures->get($id, [
            'contain' => ['Users', 'Ateliers', 'AtelierClients'],
        ]);

        $this->set('mesure', $mesure);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesure = $this->Mesures->newEntity();
        if ($this->request->is('post')) {
            $mesure = $this->Mesures->patchEntity($mesure, $this->request->getData());
            if ($this->Mesures->save($mesure)) {
                $this->Flash->success(__('The mesure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesure could not be saved. Please, try again.'));
        }
        $users = $this->Mesures->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Mesures->Ateliers->find('list', ['limit' => 200]);
        $atelierClients = $this->Mesures->AtelierClients->find('list', ['limit' => 200]);
        $this->set(compact('mesure', 'users', 'ateliers', 'atelierClients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mesure id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesure = $this->Mesures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesure = $this->Mesures->patchEntity($mesure, $this->request->getData());
            if ($this->Mesures->save($mesure)) {
                $this->Flash->success(__('The mesure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesure could not be saved. Please, try again.'));
        }
        $users = $this->Mesures->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Mesures->Ateliers->find('list', ['limit' => 200]);
        $atelierClients = $this->Mesures->AtelierClients->find('list', ['limit' => 200]);
        $this->set(compact('mesure', 'users', 'ateliers', 'atelierClients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mesure id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesure = $this->Mesures->get($id);
        if ($this->Mesures->delete($mesure)) {
            $this->Flash->success(__('The mesure has been deleted.'));
        } else {
            $this->Flash->error(__('The mesure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
