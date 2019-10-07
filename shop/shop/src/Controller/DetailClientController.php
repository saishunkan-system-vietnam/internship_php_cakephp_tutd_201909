<?php
namespace App\Http\Session;
namespace App\Controller;

use Cake\Event\Event;
use Cake\Cache\Cache;
use App\Controller\AppController;
use function mysql_xdevapi\getSession;

use Cake\Core\Configure;
use Cake\Http\Session\DatabaseSession;

class DetailClientController extends AppController
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
        $slider = $this->Slider
            ->find()
            ->select(['name', 'link', 'image', 'text', 'id'])
            ->where(['status' => 1])
            ->limit(1);

        $this->set(compact('slider'));
    }

    //dai dien
    public function represent()
    {
        $represent = $this->Represent
            ->find()
            ->select(['name', 'image', 'status'])
            ->where(['status' => 1])
            ->limit(3)
            ->order(['id' => 'DESC']);
        $this->set(compact('represent'));
    }

    //products-title
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

    //$logolast
    public function logolast()
    {
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

    public function detaill()
    {
        $id = $this->request->getParam('id');
//        $products = $this->Products->find()
//            ->select(['id', 'image', 'product_name', 'price', 'sale', 'description', 'size'])
//            ->where(['id' => 23])
//            ->first()->toArray();
        $products = $this->Products->get($id);
        $this->set('products', $products);

//        $relate = $this->Products->find()

        $relate = $this->Products->find()
            ->where(['id'])
            ->order(['id' => 'DESC'])
            ->limit(4)
            ->toArray();
        $this->set('relate', $relate);
//        dd($products);
    }

    public function addToCart()
    {

        $id = $this->request->getParam('id');
        $product = $this->Products->get($id);

        if ($this->request->is('post')) {
//get gio hang hien tai
            $dataCart = $this->request->Session->get('cart');

//check gio hang neu co roi thi them so luong, chua co the them moi

//thuc hien add them san pham vao gio
            $dataCart[count($dataCart)] = array(
                'id' => $product['Product']['id'],
                'name' => $product['Product']['product_name'],
                'sale' => $product['Product']['sale'],
                'slug' => $product['Product']['slug'],
                'quantity' => 1,
            );
//            );
//            dd($item);
            //tao gio hang va them san phamm vao trong gio hang
            //tao session
//            Cache::write('cart',$dataCart);
//            $session = $this->getRequest()->getSession();
            $this->getRequest()->getSession()->write('cart', $dataCart);
            dd(getSession($dataCart));
            $this->Session->setFlash('Add thanh cong', 'default', array('class' => 'alert alert-info'), 'cart');
            $this->redirect($this->referer());

        }
    }

    public function detail()
    {
        $this->logo();
        $this->slider();
        $this->represent();
        $this->title();
        $this->logolast();
        $this->users();
        $this->loginclient();
        $this->detaill();
        $this->addToCart();


    }
}
