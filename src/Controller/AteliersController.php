<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ateliers Controller
 *
 * @property \App\Model\Table\AteliersTable $Ateliers
 *
 * @method \App\Model\Entity\Atelier[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AteliersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $ateliers = $this->paginate($this->Ateliers);

        $this->set(compact('ateliers'));
    }

    /**
     * View method
     *
     * @param string|null $id Atelier id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atelier = $this->Ateliers->get($id, [
            'contain' => ['Users', 'AtelierClients', 'Collectionateliers', 'Coutures', 'Mesures', 'Parametres', 'Partagecollections'],
        ]);

        $this->set('atelier', $atelier);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atelier = $this->Ateliers->newEntity();
        if ($this->request->is('post')) {
            $atelier = $this->Ateliers->patchEntity($atelier, $this->request->getData());
            if ($this->Ateliers->save($atelier)) {
                $this->Flash->success(__('The atelier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atelier could not be saved. Please, try again.'));
        }
        $this->set(compact('atelier'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atelier id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atelier = $this->Ateliers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atelier = $this->Ateliers->patchEntity($atelier, $this->request->getData());
            if ($this->Ateliers->save($atelier)) {
                $this->Flash->success(__('The atelier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atelier could not be saved. Please, try again.'));
        }
        $this->set(compact('atelier'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atelier id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atelier = $this->Ateliers->get($id);
        if ($this->Ateliers->delete($atelier)) {
            $this->Flash->success(__('The atelier has been deleted.'));
        } else {
            $this->Flash->error(__('The atelier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
