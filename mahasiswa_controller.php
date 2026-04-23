<?php

require_once "model/Mahasiswa.php";

class mahasiswa_controller{

    public function index() {
        $model = new mahasiswa();
        $data = $model->getData();

        require "view/mahasiswa_view.php";
    }

}