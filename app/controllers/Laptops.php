<?php

namespace App\Controllers;

use App\Core\Controller;

class Laptops extends Controller
{
    public object $model;

    public function __construct()
    {
        $this->model = new \App\Models\Laptop();
    }

    public function index()
    {
        $data['rows'] = $this->model->show();
        $this->dashboard('laptops/index', $data);
    }

    public function input()
    {
        $this->dashboard('laptops/input');
    }

    public function save()
    {
        $this->model->save();
        header('location:' . URL . '/laptops');
    }

    public function edit($id)
    {
        $data['row'] = $this->model->edit($id);
        $this->dashboard('laptops/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/laptops');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/laptops');
    }
}



