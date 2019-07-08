<?php
class contatosController extends Controller {



  public function index() {

  }

  public function add() {
    $data = array(
      'error' => ''
    );

    if (!empty($_GET['error'])) {
      $data['error'] = $_GET['error'];
    }

    $this->loadTemplate('add', $data);
  }


  public function add_save() {
    if (!empty($_POST['email'])) {
      $nome = $_POST['nome'];
      $email = $_POST['email'];

        $contatos = new Contatos();
        if($contatos->add($nome, $email)) {
          header("Location: ".BASE_URL);
          exit;
        } else {
          header("Location: ".BASE_URL.'contatos/add?error=exists');
        }     
      } else {
        header("Location: ".BASE_URL.'contatos/add');
    }
  }

  public function edit($id) {
    $data = array();
    
     if (!empty($id)) {
      
      if (!empty($_POST['email'])) {
        $name = $_POST['nome'];
        $email = $_POST['email'];
    
        $c = new Contatos();
        $c->upEdit($name, $email, $id);
      } else {
        $c = new Contatos();
          $data['user'] = $c->getEdit($id);
          
          if (isset($data['user']['id'])) {
            $this->loadTemplate('edit', $data);
            exit;
          } 
        }
      }
      header("Location: ".BASE_URL);
      exit;
  }

  public function delet($id) {
      if (!empty($id)) {
       $c = new Contatos();
       $c->delete($id);
      }

      header("Location: ".BASE_URL);
      exit;
    }
        
  }
