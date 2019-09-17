<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\UsersTable;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;
use http\Env\Request;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('Users');
    }

    public function index()
    {
        $this->paginate = [
            'limit' => '5'
        ];
        $users = $this->paginate($this->Users->find()->order(['id' => 'DESC']));
        $this->set(compact('users'));

    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $input['username'] = $this->getRequest()->getData('username');
            $input['email'] = $this->getRequest()->getData('email');
            $input['phone'] = $this->getRequest()->getData('phone');
            $input['addr'] = $this->getRequest()->getData('addr');
            $input['password'] = $this->getRequest()->getData('password');
            $this->Users->patchEntity($user, $input);

            if ($this->Users->save($user)) {
                return $this->redirect(['action' => 'index']);
            } else {
//                dd($user);
                $error = $user->errors();
//                dd($error);
                $this->set('err', $error);
            }

        }
    }

    public function edit()
    {
        $id = $this->request->getParam('id');
        $user = $this->Users->get($id);
        $this->set('user', $user);
        if ($this->request->is('post')) {
            $input['username'] = $this->getRequest()->getData('username');
            $input['email'] = $this->getRequest()->getData('email');
            $input['password'] = $this->getRequest()->getData('password');
            $input['phone'] = $this->getRequest()->getData('phone');
            $input['addr'] = $this->getRequest()->getData('addr');
            $this->Users->patchEntity($user, $input);
            if ($this->Users->save($user)) {
                return $this->redirect(['action' => 'index']);
            } else {
                $error = $user->getError();
                $this->set('err', $error);
            }
        }
    }

    public function delete()
    {
        $id = $this->request->getParam('id');
        $user = $this->Users->get($id);
        $this->Users->delete($user);
        return $this->redirect(['action' => 'index']);
    }

    public function search()
    {
        $search = $this->request->getQuery('q');
        $this->paginate = [
            'limit' => '3'
        ];
        $users = $this->paginate($this->Users->find()->where(function ($exp, $query) use ($search) {
            return $exp->like('username', '%' . $search . '%');

        }));
        $this->set('users', $users);
    }

    public function register()
    {
        if ($this->request->is('post')) {
            $userTable = TableRegistry::get('Users');
            $user = $userTable->newEntity();
            $hasher = new DefaultPasswordHasher();
            $myname = $this->request->getData('username');
            $myemail = $this->request->getData('email');
            $mypassword = Security::hash($this->request->getData('password'), 'sha256', false);
            $mytoken = Security::hash(Security::randomBytes(32));
            $user->name = $myname;
            $user->email = $myemail;
            $user->password = $hasher->hash($mypassword);
            $user->token = $mytoken;
            if ($userTable->save($user)) {
                $this->Flash->set('Reginster successful, your confirmation email has been sent', ['element' => 'success']);

                TransportFactory::setConfig('mailtrap', [
                    'host' => 'smtp.mailtrap.io',
                    'port' => 2525,
                    'username' => '48170412f210cf',
                    'password' => '88fdbaef49840d',
                    'className' => 'Smtp'
                ]);
                $email = new Email('default');
                $email->transport('mailtrap');
                $email->emailFormat('html');
                $email->from('trinhtu0406997@gmail.com', 'Trinhtu');
                $email->subject('Plese confiem your email to activation your account');
                $email->to(($myemail));
                $email->send('hai'.$myname.'<br>Please confirm your email link below <br><a href="http://localhost:8765/users/verification/'.$mytoken.'">Verification email</a><br>Thank');







            } else {
                $this->Flash->set('Reginster failed, please try again', ['element' => 'error']);

            }


        }
    }

    public function verification($token)
    {
        $userTable = TableRegistry::get('Users');
        $verify = $userTable->find('all')->where(['token' => $token])->first();
        $verify->verified = '1';
        $userTable->save($verify);
    }









    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success('Đăng nhập thành công');
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('Đăng nhập thất bại');
            }
        }
    }


//    /**
//     * Index method
//     *
//     * @return \Cake\Http\Response|null
//     */
//    public function index()
//    {
//
//        $this->set('users', $this->Users->find('all'));
//    }
//
//    /**
//     * View method
//     *
//     * @param string|null $id User id.
//     * @return \Cake\Http\Response|null
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function view($id = null)
//    {
//        $user = $this->Users->get($id, [
//            'contain' => []
//        ]);
//
//        $this->set('user', $user);
//    }
//
//    /**
//     * Add method
//     *
//     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
//     */
//    public function add()
//    {
//
//        $users = $this->Users->newEntity();
//        if ($this->request->is('post')) {
//            $users = $this->Users->patchEntity($users, $this->request->getData(), ['validate' => false]);
////            dd($users);
//            if ($this->Users->save($users)) {
//                $this->Flash->success(__('Bạn đã lưu thành công'));
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('Không thành công thử lại'));
//        }
//        $this->set(compact('users'));
//
//    }
//
//    /**
//     * Edit method
//     *
//     * @param string|null $id User id.
//     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function edit($id = null)
//    {
////        $user = $this->Users->get($id, [
////            'contain' => []
////        ]);
////        if ($this->request->is(['patch', 'post', 'put'])) {
////            $user = $this->Users->patchEntity($user, $this->request->getData());
////            if ($this->Users->save($user)) {
////                $this->Flash->success(__('The user has been saved.'));
////
////                return $this->redirect(['action' => 'index']);
////            }
////            $this->Flash->error(__('The user could not be saved. Please, try again.'));
////        }
////        $this->set(compact('user'));
//
//
////        $users = $this->Users->get($id, ['contain' => []
////        ]);
////        if ($this->request->is(['patch', 'post', 'put'])) {
////            $users = $this->Users->patchEntity($users, $this->request->getData(), ['validate' => false]);
////            if ($this->Users->save($users)) {
////                $this->Flash->success(__('Bạn sửa thành công'));
////                return $this->redirect(['action' => 'index']);
////            }
////            $this->Flash->error(__('That bai'));
////        }
////        $this->set(compact('users'));
//        if($this->request->is('post')) {
//            $username = $this->request->getData('username');
////            dd($username);
//        }
//        $users = $this->Users->find()->where(['id' => $id])->first();
//        $this->set('users',$users);
//
//    }
//
//    /**
//     * Delete method
//     *
//     * @param string|null $id User id.
//     * @return \Cake\Http\Response|null Redirects to index.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $user = $this->Users->get($id);
//        if ($this->Users->delete($user)) {
//            $this->Flash->success(__('The user has been deleted.'));
//        } else {
//            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }

}
