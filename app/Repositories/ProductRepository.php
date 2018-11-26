<?php

namespace App\Repositories;

use App\Product;
use App\Base\Repository;

class ProductRepository extends Repository
{
    protected function getClass()
    {
        return Product::class;
    }    

    public function createProduct($data)
    {
    	$data['price'] = floatval($data['price']);
    	return $this->model->create($data);
    }

    public function updateProduct($data, $id)
    {
    	$model = $this->model->find($id);
    	$data['price'] = floatval($data['price']);

    	return $model->update($data);
    	
    }
}

