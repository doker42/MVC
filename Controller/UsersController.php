<?php

class UsersController extends Controller
{
  public $uses = ['Pages'];
  
  public function index()
  {
    $all_users = $this->UsersModel->findAll();
    $all_pages = $this->PagesModel->findAll();
    
    $this->set('users', $all_users);
    $this->set('pages', $all_pages);
    
    $this->render('all_users');
  }
  
  public function view($id)
  {
    $current_user = $this->UsersModel->get($id);
    $this->set('user', $current_user);
    $this->set('id', $id);
    $this->set('pages', $this->PagesModel->findAll(['user_id' => $id, 'deleted' => 0]));
    $this->render('view_user');
  }
  
  
  
}