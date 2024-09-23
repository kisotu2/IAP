<?php
class error{
    public function setMsg($name,$value,$class){
        if(is_array($value)){
            $_SESSION[$name] = $value;
        }
        else{
            $_SESSION[$name] = "<div class = '$class'>$value</div>";
        }
    }
    public function getMsg($name){
        if(isset($_SESSION)[$name]){
            
        }
    }
}
?>