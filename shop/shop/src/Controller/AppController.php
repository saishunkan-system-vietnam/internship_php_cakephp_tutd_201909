<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use App\Model\Table\UsersTable;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

//    public function initialize()
//    {
//
//    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
//        $this->viewBuilder()->getLayout('fontendefault');
        $session = $this->Auth->User();
        if ($session == true) {
            $this->set(compact('session'));
        }
    }
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password',
                    ],
                    'userModel' => 'User',
                ]
            ],
//            'loginRedirect' => [
//                'controller' => 'User',
//                'action' => 'index'
//            ],
            'loginAction' => [
                'controller' => 'Login',
                'action' => 'login',
            ],
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        if ($this->request->getSession()->read('Auth.User')){
            $this->set('logedIn',true);
        }else{
            $this->set('logedIn',false);
        }
    }

    public function logo()
    {
        $logo = $this->Logo
            ->find()
            ->select('image', 'link')
            ->where(['status' => 1]);
        $this->set(compact('logo'));
    }

    public function slider()
    {
        //slider
        $slider = $this->Slider
            ->find()
            ->select(['name', 'link', 'image', 'text', 'id'])
            ->where(['status' => 1]);

//        dd($slider->toArray());
        $this->set(compact('slider'));
    }

    public function represent()
    {
        //Đại diện
        $represent = $this->Represent
            ->find()
            ->select(['name', 'image', 'status'])
            ->where(['status' => 1])
            ->limit(3)
            ->order(['id' => 'DESC']);
        $this->set(compact('represent'));
    }

    public function shopon()
    {
        //show shopon
        $shopon = $this->Shopon->find()
            ->select(['id', 'image', 'linkfb', 'linkyou', 'linkzalo', 'status'])
            ->where(['status' => 1])
            ->limit(12)
            ->order(['id' => 'DESC'])->toArray();
        $this->set('shopon', $shopon);
    }

    public function logolast()
    {
        //$logolast
        $logolast = $this->Logolast->find()
            ->select(['id', 'link', 'image', 'text', 'status'])
            ->where(['status' => 1])
            ->limit(1)
            ->order(['id' => 'DESC'])->toArray();
        $this->set('logolast', $logolast);
    }

    // dang ki trang client
    public function users()
    {
        $users = $this->Usersclient->newEntity();
        if ($this->request->is('post')) {
            $input['name'] = $this->getRequest()->getData('name');
            $input['email'] = $this->getRequest()->getData('email');
            $input['password'] = md5($this->getRequest()->getData('password'));
            $this->Usersclient->patchEntity($users, $input);
            if ($this->Usersclient->save($users)) {
                $this->set(compact('users'));
                $this->Flash->success(__('ok'));
            } else {
                $error = $users->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('users'));
    }

    //login client
    public function loginclient()
    {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userr = $this->Usersclient->find()
                ->select(['id', 'name', 'email', 'password'])
                ->where(['email' => $email])
                ->orwhere(['password' => $password])
                ->all()->toArray();
            $dataUser = $userr[0];
            $this->getRequest()->getSession()->write('dataUser', $dataUser);
        }
        $dataUserLogin = $this->getRequest()->getSession()->read('dataUser');
        $this->set('dataUserLogin', $dataUserLogin);
    }

    public function logout()
    {
        $id = $this->request->getParam('id');
//        dd($id);
        $this->getRequest()->getSession()->delete('dataUser');
        $this->redirect($this->referer());
    }

    public function menu(){

        $menu=$this->Categories->find()
            ->select(['id','name','parent_id','status'])
            ->where(['status'=>1])
            ->andWhere(['parent_id'=>0]);
        $this->set(compact('menu'));

    }
    public function title()
    {
        $title = $this->Categories
            ->find()
            ->select(['id', 'name', 'parent_id', 'slug'])
            ->where(['status' => 1])
            ->limit(4)
            ->order(['id' => 'DESC']);
        $this->set(compact('title'));
    }
}
