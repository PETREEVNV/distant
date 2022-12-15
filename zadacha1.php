<?php
class Person{

public $first_name, $last_name;

function hello(){
if($this->first_name!='' || $this->last_name!=''){
echo '<br>hello ' . $this->first_name . ' ' . $this->last_name;
}
}

}
$person = new Person();
$person->first_name = 'Vanya';
$person->last_name = 'Petrov';
$person->hello();
?>