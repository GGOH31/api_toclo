<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parametres Controller
 *
 * @property \App\Model\Table\ParametresTable $Parametres
 *
 * @method \App\Model\Entity\Parametre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParametresController extends AppController
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
        $parametres = $this->paginate($this->Parametres);

        $this->set(compact('parametres'));
    }

    /**
     * View method
     *
     * @param string|null $id Parametre id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parametre = $this->Parametres->get($id, [
            'contain' => ['Users', 'Ateliers'],
        ]);

        $this->set('parametre', $parametre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parametre = $this->Parametres->newEntity();
        if ($this->request->is('post')) {
            $parametre = $this->Parametres->patchEntity($parametre, $this->request->getData());
            if ($this->Parametres->save($parametre)) {
                $this->Flash->success(__('The parametre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parametre could not be saved. Please, try again.'));
        }
        $users = $this->Parametres->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Parametres->Ateliers->find('list', ['limit' => 200]);
        $this->set(compact('parametre', 'users', 'ateliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parametre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parametre = $this->Parametres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parametre = $this->Parametres->patchEntity($parametre, $this->request->getData());
            if ($this->Parametres->save($parametre)) {
                $this->Flash->success(__('The parametre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parametre could not be saved. Please, try again.'));
        }
        $users = $this->Parametres->Users->find('list', ['limit' => 200]);
        $ateliers = $this->Parametres->Ateliers->find('list', ['limit' => 200]);
        $this->set(compact('parametre', 'users', 'ateliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parametre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parametre = $this->Parametres->get($id);
        if ($this->Parametres->delete($parametre)) {
            $this->Flash->success(__('The parametre has been deleted.'));
        } else {
            $this->Flash->error(__('The parametre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
