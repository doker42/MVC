<?php

class PagesController extends Controller
{
  public function index()
  {
    $all_pages = $this->PagesModel->findAll();
    $view_vars = ['pages' => $all_pages];
    require_once('Template/all_pages.php');
  }
  
  public function view($id)
  {
    $view_vars = ['page' => $this->PagesModel->get($id), 'id' => $id];
    require_once('Template/view_page.php');
  }
  
  
  
}