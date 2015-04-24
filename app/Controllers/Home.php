<?php

class Home extends Controller {

    public function index($id = null){
        echo "[home] Controller call ";
        $this->view('home/index', ["id"=>$id]);
    }
}

?>

