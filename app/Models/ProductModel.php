<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'price', 'description', 'quantity'];

    public function create($data) {
        return $this->save($data);
    }

    public function edit($id, $data) {
        return $this->update($id, $data);
    }

    public function deleteProduct($id){
        return $this->delete($id);
    }

}