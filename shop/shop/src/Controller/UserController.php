<?php

namespace App\Controller;

use App\Controller\AppController;

class UserController extends AppController
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('User');

    }

    public function index()
    {
        $this->paginate = [
            'limit' => '5'
        ];
        $user = $this->paginate($this->User->find()->order(['id' => 'DESC']));
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->User->newEntity();
        if ($this->request->is('post')) {

            $input['username'] = $this->getRequest()->getData('username');
            $input['email'] = $this->getRequest()->getData('email');
            $input['phone'] = $this->getRequest()->getData('phone');
            $input['addr'] = $this->getRequest()->getData('addr');
            $input['password'] = $this->getRequest()->getData('password');
            $input['status'] = $this->getRequest()->getData('status');
            $uploaded_path = "/img/upload";
            $tmp_name = $this->request->getData()['file']['tmp_name'];
            $image_name = $this->request->getData()['file']['name'];
            $setNewFileName = time() . "_" . rand(000000, 999999) . $image_name;
            if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $setNewFileName)) {
                $user->image = $uploaded_path . "/" . $setNewFileName;
            }
            $this->User->patchEntity($user, $input);
            if ($this->User->save($user)) {
                $this->set(compact('user'));
                return $this->redirect(['controller' => 'User', 'action' => 'index']);
            } else {
                $error = $user->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('user'));
    }

    public function edit()
    {
        $id = $this->request->getParam('id');
        $user = $this->User->get($id);
        $this->set('user', $user);
        if ($this->request->is('post')) {

            $input['username'] = $this->getRequest()->getData('username');
            $input['email'] = $this->getRequest()->getData('email');
            $input['phone'] = $this->getRequest()->getData('phone');
            $input['addr'] = $this->getRequest()->getData('addr');
            $input['password'] = $this->getRequest()->getData('password');
            $input['status'] = $this->getRequest()->getData('status');
            $uploaded_path = "/img/upload";
            $tmp_name = $this->request->getData()['file']['tmp_name'];
            $image_name = $this->request->getData()['file']['name'];
            $setNewFileName = time() . "_" . rand(000000, 999999) . $image_name;
            if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $setNewFileName)) {
                $user->image = $uploaded_path . "/" . $setNewFileName;
            }
            $this->User->patchEntity($user, $input);
            if ($this->User->save($user)) {
                $this->set(compact('user'));
                return $this->redirect(['controller' => 'User', 'action' => 'index']);
            } else {
                $error = $user->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('user'));
    }

    public function delete()
    {
        $id = $this->request->getParam('id');
        $user = $this->User->get($id);
        $this->User->delete($user);
        return $this->redirect(['controller' => 'User', 'action' => 'index']);
    }

    public function search()
    {
        $search = $this->request->getQuery('q');
        $this->paginate = [
            'limit' => '3'
        ];

        $user = $this->paginate($this->User->find()->where(function ($exp, $query) use ($search) {
            return $exp->like('username', '%' . $search . '%');
        }));
        $this->set('user', $user);
        $this->set('search', $search);
    }
    public function logout(){
        $this->Flash->success('Login Successful');
        $this->redirect($this->Auth->logout());
    }
}
