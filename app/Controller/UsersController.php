<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersController
 *
 * @author MRK19933
 */
class UsersController extends AppController {

    public $components = array('RequestHandler');

    /* public function index(){

      /* debug($this->request);
      // query ta3 el get
      // data ta3 el post
      debug($this->response); // ta7ki biha m3a el navigateur

      //  die('hhhh');
      $this->set('prenom','riadh');
      //$this->User->recherche();
      //$this->User->lirechamp();
      //$this->User->enregisterer();
      //$this->User->modif(1);
      //$this->User->suppremer(1);
      } */

    public function affiche() {
        $users = $this->User->affiche_list();
        $this->set(array(
            'users' => $users,
            '_serialize' => array('users')
        ));
        $this->set('liste', $users);
    }

    public function add() {
        if ($this->request->is('post')) {
            //debug($this->request->data['User']['age']);
            $data = $this->request->data;
            $ajout = $this->User->ajouter_user($data);
            debug($ajout);
            if ($ajout) {
                $message = 'Saved';
                return $this->redirect('index');
            } else {
                $message = 'Error';
            }
            $this->set(array(
                'message' => $message,
                '_serialize' => array('message')
            ));

            //$this->render('index');
        }
    }

    public function indexapi() {
        $this->autoRender = false;
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        if ($this->request->is('post')) {
            $users = $this->User->find('all');
            // debug($users);
            //die();
            http_response_code(200);
            echo json_encode(array(
                'data' => $users,
                'status' => 200,
                'type' => 'success'
            ));
            die();
        }
    }

    public function adduserapi() {
        $this->autoRender = false;
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
         header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        if ($this->request->is('post')) {
            $data = $this->request->data;
            //debug($data);
            //debug($this->User->save($data));
            //die();
            if ($this->User->save($data)) {
             // debug($users);
                //die();
                http_response_code(200);
                echo json_encode(array(
                    'text' => __("user ajouter avec succee"),
                    'status' => 200,
                    'type' => 'success'
                ));
                die();
            }else{
                http_response_code(200);
                echo json_encode(array(
                'text' =>"error",
                'status' => 200,
                'type' => 'error'
                ));
                die();
            }
        }
    }

}
