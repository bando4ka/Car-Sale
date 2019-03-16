<?php

class User {
    //private public protected
    private $email;
    private $password;

   
    const BR = "<br />";
    
    public function __construct($email, $password)  { 
  
        $this->email=$email;  
        $this->password=$password;     

    }    
    
function getEmail(){  return $this->email; }
function getPassword(){  return $this->password; }

function setEmail($value){   $this->email = $value; }
function setPassword($value){   $this->password = $value; }

function __tostring(){
    return "<div style='float: left: margin-right:40px;'>".
                    
                    "<font size='6px' style='color:Grey;'>E-Mail: {$this->email}</font>".self::BR.
                    "<font size='6px' style='color:Grey;'>Password: {$this->password}</font>".self::BR.
                    "</div>";
} 
}

?>