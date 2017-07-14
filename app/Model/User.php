<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author MRK19933
 */
class User extends AppModel {

    public $displayField='nom';
    public function recherche()
    {
        debug($this->find('all' ,array(
               'fields' => array('User.id','User.nom'),
               'condition' => array('User.nom LIKE' => 'tt')
               
               )));
    }
    public function lirechamp()
    {
        //$this->id=1;
       // debug($this->read('User.id'));
        
        debug($this->findByAge('5',array('User.id'))); 
    }
    
    public function enregisterer()
    {
        $this->save(null,true,array(
         
            'nom' => 'riadh',
            'prenom' => 'kh',
            'age' => '24',
            'adresse' => '7oma'
        ));
        $this->create();
        
    }
    public function modif($id)
    {
        $this->save(array(
            'id' => $id,
            'nom' => 'tt',
            'prenom' => 'tttt',
            'age' => '5',
            'adresse' => 'ttttt'
        ));
    }
    public function suppremer($id)
    {
    $this->delete($id);
    }
    
    public function ajouter_user($data)
    {
        debug($data);
        die();
        $this->create($data,true);
        $ajout=$this->save(null,true,array('nom','prenom','age','adresse'));
        return $ajout ;
    }
    public function affiche_list()
    {
        $liste=$this->find('all');
        
        return $liste;
    }
    
    
    /*public $validate = array(
        'nom' =>array(
            'rule' => array('maxLength',10),
            'message' => 'nom invalide'
        ),
        'prenom' =>array(
            'rule' => array('maxLength',10),
            'message' => 'prenom invalide'
        ),
        'age' =>array(
            'rule' => array('maxLength',3),
            'message' => 'age invalide'
        ),
        'adresse' =>array(
            'rule' => array('maxLength',10),
            'message' => 'prenom invalide'
        )
    );*/
}
