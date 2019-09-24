<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Logolast Controller
 *
 * @property \App\Model\Table\LogolastTable $Logolast
 *
 * @method \App\Model\Entity\Logolast[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogolastController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('Logolast');
    }

    public function index()
    {
        $this->paginate = [
            'limit' => '5'
        ];
        $logoo = $this->paginate($this->Logolast->find()->order(['id' => 'DESC']));
        $this->set(compact('logoo'));
    }

    public function add()
    {
        $logoo = $this->Logolast->newEntity();
        if ($this->request->is('post')) {
            $input['link'] = $this->getRequest()->getData('link');
            $input['text'] = $this->getRequest()->getData('text');
            $input['status'] = $this->getRequest()->getData('status');
            $uploaded_path = "/img/upload";
            $tmp_name = $this->request->getData()['file']['tmp_name'];
            $image_name = $this->request->getData()['file']['name'];
            $setNewFileName = time() . "_" . rand(000000, 999999) . $image_name;
            if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $setNewFileName)) {
                $logoo->image = $uploaded_path . "/" . $setNewFileName;
            }
            $this->Logolast->patchEntity($logoo, $input);
            if ($this->Logolast->save($logoo)) {
                $this->set(compact('logoo'));
                return $this->redirect(['controller' => 'Logolast', 'action' => 'index']);
            } else {
                $error = $logoo->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('logoo'));
    }

    public function edit()
    {
        $id = $this->request->getParam('id');
        $logoo = $this->Logolast->get($id);
        $this->set('logo', $logoo);
        if ($this->request->is('post')) {
            $input['link'] = $this->getRequest()->getData('link');
            $input['text'] = $this->getRequest()->getData('text');
            $input['status'] = $this->getRequest()->getData('status');
            $uploaded_path = "/img/upload";
            $tmp_name = $this->request->getData()['file']['tmp_name'];
            $image_name = $this->request->getData()['file']['name'];
            $setNewFileName = time() . "_" . rand(000000, 999999) . $image_name;
            if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $setNewFileName)) {
                $logoo->image = $uploaded_path . "/" . $setNewFileName;
            }
            $this->Logolast->patchEntity($logoo, $input);
            if ($this->Logolast->save($logoo)) {
                $this->set(compact('logoo'));
                return $this->redirect(['controller' => 'Logolast', 'action' => 'index']);
            } else {
                $error = $logoo->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('logoo'));
    }


    public function delete()
    {
        $id = $this->request->getParam('id');
        $logoo = $this->Logolast->get($id);
        $this->Logolast->delete($logoo);
        return $this->redirect(['controller' => 'Logolast', 'action' => 'index']);
    }

    public function search()
    {
        $search = $this->request->getQuery('q');
        $this->paginate = [
            'limit' => '3'
        ];

        $logoo = $this->paginate($this->Logolast->find()->where(function ($exp, $query) use ($search) {
            return $exp->like('link', '%' . $search . '%');
        }));
        $this->set('logoo', $logoo);
        $this->set('search', $search);
    }
}
