<?php

namespace Mattsmithdev;

class Student
{
  private $id;
  
  public function __construct($id)
  {
    // use setter - so validation only in one place
    $this->SetId($id);
  }
  
  public function GetId()
  {
    return $this->id;
  }
  
  public function SetId($id)
  {
    if(empty($id)){
      $id = -1;
    }
    
    $this->id = $id;
  }
}
