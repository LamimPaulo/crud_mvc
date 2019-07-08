<?php
class homeController extends Controller {

    public function index() {
        $data = array();

        $contatos = new Contatos();
        $data['lista'] = $contatos->getAll();

        $this->loadTemplate('home', $data);
    }

}
