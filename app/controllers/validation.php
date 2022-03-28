<?php 
require_once 'controller.php';
class Uservalid extends Controller {

  private $data;
  private $eror = [];
  private static $fields = ['name', 'email','password','retype_password'];

  public function __construct($post_data){
    $this->data = $post_data;

  }

  public function validateForm(){

    foreach(self::$fields as $field){
      if(!array_key_exists($field, $this->data)){
        trigger_error("'$field' is not present in the data");
        return;
      }
    }

    $this->valName();
    $this->valEmail();
    $this->valPassword();
    return $this->eror;

  }

  private function valName(){

    $val = trim($this->data['name']);

    if(empty($val)){
      $this->addError('errorname', 'username cannot be empty');
    } else {
      if(!preg_match('/^[a-zA-Z0-9]{4,10}$/', $val)){
        $this->addError('errorname','username must be 4-10 chars & alphanumeric');
      }
    }

  }

  private function valEmail(){

    $val = trim($this->data['email']);

    if(empty($val)){
      $this->addError('erroremail', 'email cannot be empty');
    } else {
      if(!filter_var($val, FILTER_VALIDATE_EMAIL)){
        $this->addError('erroremail', 'email must be a valid email address');
      }
    }

  }
  private function valPassword(){

    $valpass = trim($this->data['password']);
    $valRepass = trim($this->data['retype_password']);

    if(empty($valpass) && empty($valRepass)){
      $this->addError('errorpassword', 'password cannot be empty');
    } else {
      if($valpass!==$valRepass){
        $this->addError('errorpassword', 'passwords must be the same');
      }
    }

  }

  private function addError($key, $val){
    $this->eror[$key] = $val;
  }

}

?>