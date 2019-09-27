<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Login Controller
 *
 *
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('User');
        $this->viewBuilder()->setLayout('logindefault');
    }

    public function login()
    {
        if ($this->request->is('post')) {


            $user = $this->Auth->identify();
            if ($user['status']==true){
                $this->Auth->setUser($user);
//                dd($_SESSION);
//              echo  $this->Auth->User()['username'];
//              dd();
                $this->Flash->success('Login thành công');
                return $this->redirect(['controller' => 'User', 'action' => 'index']);
            } else {
                $this->Flash->error('Login thất bại');
            }
        }
    }




}
