<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsClient Controller
 *
 *
 * @method \App\Model\Entity\ProductsClient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsClientController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
//     $this->viewBuilder()->getLayout("fontendefault");
        $this->viewBuilder()->setLayout("cartfontend");
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

    public function productss()
    {
        $productss = $this->Products->find()
            ->select(['id','image', 'product_name', 'price', 'sale', 'description', 'size', 'slug', 'status', 'categories_id'])
            ->where(['status' => 1])
            ->toArray();
//        dd($productss);
        $this->set(compact('productss'));
//        dd($productss);
//        dd($productss);
    }
    public function product()
    {
        $this->logo();
        $this->slider();
        $this->represent();
        $this->logolast();
        $this->title();
        $this->users();
        $this->loginclient();
        $this->productss();
        $this->menu();
    }


}
