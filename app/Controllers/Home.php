<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {

        $products = new ProductModel();

        $allProducts = $products->findAll();
       
        

        $variables = [
            'products' => $allProducts,
        ];


        helper(['form']);
        return view('home', $variables);
        
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'title' =>'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ];

    
   

        if($this->validate($rules)) {
            
            $createProduct = new ProductModel();
           
            $data = [
                'title' => $this->request->getVar('title'),
                'price' => $this->request->getVar('price'),
                'description' => $this->request->getVar('description'),
                'quantity' => $this->request->getVar('quantity'),

            ];

            $createProduct->create($data);
            return redirect()->to('/home');

        } else {
            $data['validation'] = $this->validator;
            echo view('home', $data);
        }


    }

    public function editPost() {
        helper(['form']);

        $rules = [
            'title' =>'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ];

      if($this->validate($rules)) {
        $editProduct = new ProductModel();
        $idProduct = $this->request->getVar('id');

        $data = [
            'title'=> $this->request->getVar('title'),
            'price'=>$this->request->getVar('price'),
            'description'=>$this->request->getVar('description'),
            'quantity'=>$this->request->getVar('quantity'),
        ];

        $editProduct->edit($idProduct, $data);
        return redirect() ->to('/home');

      } else {
        $data['validation'] = $this->validator;
        echo view('home', $data);
      }
    }

    public function delProduct() {
        helper(['form']);

        $productModel = new ProductModel();
        $idProduct = $this->request->getGet('id');
        $productModel->deleteProduct($idProduct);

        return redirect()->to('/home');


    }

    
  
}
