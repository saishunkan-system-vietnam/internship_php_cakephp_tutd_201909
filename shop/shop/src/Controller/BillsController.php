<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bills Controller
 *
 * @property \App\Model\Table\BillsTable $Bills
 *
 * @method \App\Model\Entity\Bill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BillsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders']
        ];
        $bills = $this->paginate($this->Bills);

        $this->set(compact('bills'));
    }

    /**
     * View method
     *
     * @param string|null $id Bill id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bill = $this->Bills->get($id, [
            'contain' => ['Orders']
        ]);

        $this->set('bill', $bill);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bill = $this->Bills->newEntity();
        if ($this->request->is('post')) {
            $bill = $this->Bills->patchEntity($bill, $this->request->getData());
            if ($this->Bills->save($bill)) {
                $this->Flash->success(__('The bill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bill could not be saved. Please, try again.'));
        }
        $orders = $this->Bills->Orders->find('list', ['limit' => 200]);
        $this->set(compact('bill', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bill id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bill = $this->Bills->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bill = $this->Bills->patchEntity($bill, $this->request->getData());
            if ($this->Bills->save($bill)) {
                $this->Flash->success(__('The bill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bill could not be saved. Please, try again.'));
        }
        $orders = $this->Bills->Orders->find('list', ['limit' => 200]);
        $this->set(compact('bill', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bill id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bill = $this->Bills->get($id);
        if ($this->Bills->delete($bill)) {
            $this->Flash->success(__('The bill has been deleted.'));
        } else {
            $this->Flash->error(__('The bill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
