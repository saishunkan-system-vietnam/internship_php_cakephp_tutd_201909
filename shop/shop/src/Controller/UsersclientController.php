<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usersclient Controller
 *
 * @property \App\Model\Table\UsersclientTable $Usersclient
 *
 * @method \App\Model\Entity\Usersclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersclientController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $usersclient = $this->paginate($this->Usersclient);

        $this->set(compact('usersclient'));
    }

    /**
     * View method
     *
     * @param string|null $id Usersclient id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersclient = $this->Usersclient->get($id, [
            'contain' => []
        ]);

        $this->set('usersclient', $usersclient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersclient = $this->Usersclient->newEntity();
        if ($this->request->is('post')) {
            $usersclient = $this->Usersclient->patchEntity($usersclient, $this->request->getData());
            if ($this->Usersclient->save($usersclient)) {
                $this->Flash->success(__('The usersclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersclient could not be saved. Please, try again.'));
        }
        $this->set(compact('usersclient'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersclient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersclient = $this->Usersclient->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersclient = $this->Usersclient->patchEntity($usersclient, $this->request->getData());
            if ($this->Usersclient->save($usersclient)) {
                $this->Flash->success(__('The usersclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersclient could not be saved. Please, try again.'));
        }
        $this->set(compact('usersclient'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersclient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersclient = $this->Usersclient->get($id);
        if ($this->Usersclient->delete($usersclient)) {
            $this->Flash->success(__('The usersclient has been deleted.'));
        } else {
            $this->Flash->error(__('The usersclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
