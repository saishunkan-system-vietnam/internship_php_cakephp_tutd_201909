<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactClient Controller
 *
 *
 * @method \App\Model\Entity\ContactClient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactClientController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
//     $this->viewBuilder()->getLayout("fontendefault");
        $this->viewBuilder()->setLayout("fontendefault");
        $this->loadModel('Logo');
        $this->loadModel('Slider');
        $this->loadModel('Represent');
        $this->loadModel('Categories');
        $this->loadModel('Products');
        $this->loadModel('Shopon');
        $this->loadModel('Logolast');
        $this->loadModel('Usersclient');
        $this->loadModel('Contact');
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
            ->limit(1)
            ->order(['id' => 'DESC'])
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

    public function title()
    {
        //products-title
        $title = $this->Categories
            ->find()
            ->select(['id', 'name', 'parent_id', 'slug'])
            ->where(['status' => 1])
            ->limit(4)
            ->order(['id' => 'DESC']);
        $this->set(compact('title'));
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
            $showEmail = $userr[0];
            $this->set('showEmail', $showEmail);
        }
    }
  public function contactt(){
      $contact = $this->Contact->find()
          ->select(['id', 'addr', 'phone', 'email', 'status'])
          ->where(['status' => 1])
          ->limit(1)
          ->order(['id' => 'DESC'])->toArray();

      $this->set('contact', $contact);
  }
    public function contact()
    {
        $this->logo();
        $this->slider();
        $this->represent();
        $this->title();
        $this->logolast();
        $this->users();
        $this->loginclient();
        $this->contactt();
    }
}
