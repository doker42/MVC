<?php

class Model
{
  protected $storrage = [
    'UsersModel' => [
      1 => ['login' => 'admin', 'email' => 'admin@localhost'],
      2 => ['login' => 'guest', 'email' => 'guest@localhost'],
    ],
    'PagesModel' => [
      1 => ['deleted' => 1, 'title' => 'Test page1', 'user_id' => 1, 'text' => 'Lorem 1 ipsum user1 dolor sit'],
      2 => ['deleted' => 0, 'title' => 'Test page2', 'user_id' => 2, 'text' => 'Lorem 2 ipsum user2 dolor sit'],
      3 => ['deleted' => 0, 'title' => 'Test page3', 'user_id' => 1, 'text' => 'Lorem 3 ipsum user1 dolor sit'],
      4 => ['deleted' => 0, 'title' => 'Test page4', 'user_id' => 2, 'text' => 'Lorem 4 ipsum user2 dolor sit'],
    ]
  ];
  
  public function findAll($options = [])
  {
    $key = get_class($this);
    if (!isset($this->storrage[$key])) return false;
    
    $entities = [];
    if (!empty($options))
    {
      foreach($this->storrage[$key] as $id => $ent)
      {
        $match = true;
        foreach($options as $k => $v)
        {
          if ($ent[$k] != $v) $match = false;
        }
        if ($match) $entities[$id] = $ent;
      }
    } else {
      $entities = $this->storrage[$key];
    }
    return $entities;

  }
  
  public function get($id)
  {
    $key = get_class($this);
    if (!isset($this->storrage[$key][$id])) return false;
    return $this->storrage[$key][$id];
  }
  
}