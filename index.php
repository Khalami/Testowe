<?php

/*$zmienna;
$liczba = 5;
//echo $liczba;
//echo '<br>';
$zmienna = "Hello World! lab2";
//echo $zmienna.' - PAI';
//test($zmienna);

function test(array $test){
//    for( $i = 0; $i < 5; $i++)
//        echo $test[$i];
foreach($test as $t)
    echo $t.'<br>';
}

$arr = ['a' => 'ab', 'b' =>  1, 'c' => 24, 'd' => 124, 'e' => 'test'];
var_dump($arr);
test($arr);


echo '<br><br>';
$hash = 'Adam';
echo md5($hash);*/
//-------------------------------------------------------------------------

class User{
    private $id;
    private $name;
    private $surename;
    private $login;
    private $email;
    private $password;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
$user = new User('adam');
echo $user ->getName();

?>