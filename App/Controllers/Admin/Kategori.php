<?php

namespace App\Controllers\Admin;

use App\Controllers\Basecontroller;

use App\Models\Kategori_M;

class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        echo "<h1>Belajar CodeIniter</h1>";
    }

    public function select()
    {
        $model = new Kategori_M();
        $kategori = $model->findAll();

        

        $data = [
            'judul' =>'Select Data Dari Controller',
            'kategori' => $kategori
        ];

        

        //echo view("template/header");
        return view("kategori/select",$data);
        //echo view("template/footer");
    }

    public function selectWhere($id=null)
    {
        echo "<h1>menampilkan data yang sudah dipilih $id </h1>";
    }

    public function formInsert()
    {
        //echo view("template/header");
        return view("kategori/forminsert");
        //echo view("template/footer");
    }

    public function formUpdate($id=null)
    {
        echo view("template/header");
        echo view("kategori/update");
        echo view("template/footer");
    }

    public function update($id=null)
    {
        echo "<h1>Proses update data</h1>";
    }

    public function delete($id=null)
    {
        echo "<h1>proses menghapus data</h1>";
    }
}
