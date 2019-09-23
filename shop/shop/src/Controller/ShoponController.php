<?php

namespace App\Controller;

use App\Controller\AppController;

class ShoponController extends AppController
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('Shopon');
    }
    public function index()
    {
        $this->paginate = [
            'limit' => 5
        ];
        $shopon = $this->paginate($this->Shopon->find()->order(['id' => 'DESC']));
        $this->set(compact('shopon'));
    }

    public function add()
    {
        $shopon = $this->Shopon->newEntity();
        if ($this->request->is('post')) {
            $uploaded_path = "/img/upload";
            $tmp_name = $this->request->getData()['file']['tmp_name'];
            $image_name = $this->request->getData()['file']['name'];
            $setNewFileName = time() . "_" . rand(000000, 999999) . $image_name;
            $input['linkfb'] = $this->getRequest()->getData('linkfb');
            $input['linkyou'] = $this->getRequest()->getData('linkyou');
            $input['linkzalo'] = $this->getRequest()->getData('linkzalo');
            $input['status'] = $this->getRequest()->getData('status');
            if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $setNewFileName)) {
                $shopon->image = $uploaded_path . "/" . $setNewFileName;
            }
            $this->Shopon->patchEntity($shopon, $input);
            if ($this->Shopon->save($shopon)) {
                $this->set(compact('shopon'));
                return $this->redirect(['controller' => 'Shopon', 'action' => 'index']);
            } else {
                $error = $shopon->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('shopon'));
    }

    public function edit()
    {
        $id = $this->request->getParam('id');
        $shopon = $this->Shopon->get($id);
        $this->set('shopon', $shopon);
        if ($this->request->is('post')) {
            $uploaded_path = "/img/upload";
            $tmp_name = $this->request->getData()['file']['tmp_name'];
            $image_name = $this->request->getData()['file']['name'];
            $setNewFileName = time() . "_" . rand(000000, 999999) . $image_name;
            $input['linkfb'] = $this->getRequest()->getData('linkfb');
            $input['linkyou'] = $this->getRequest()->getData('linkyou');
            $input['linkzalo'] = $this->getRequest()->getData('linkzalo');
            $input['status'] = $this->getRequest()->getData('status');
            if (move_uploaded_file($tmp_name, WWW_ROOT . $uploaded_path . "/" . $setNewFileName)) {
                $shopon->image = $uploaded_path . "/" . $setNewFileName;
            }
            $this->Shopon->patchEntity($shopon, $input);
            if ($this->Shopon->save($shopon)) {
                $this->set(compact('shopon'));
                return $this->redirect(['controller' => 'Shopon', 'action' => 'index']);
            } else {
                $error = $shopon->getErrors();
                $this->set('err', $error);
            }
        }
        $this->set(compact('shopon'));
    }

    public function delete()
    {
        $id = $this->request->getParam('id');
        $shopon = $this->Shopon->get($id);
        $this->Shopon->delete($shopon);
        return $this->redirect(['controller' => 'Shopon', 'action' => 'index']);
    }
}
