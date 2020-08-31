<?php
header("content-type:text/html;charset=utf8");
class pages{
    public $fullPath;
private function getUrlInfo(){
    $originPath="//http".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
    $path="http://".$_SERVER["PHP_SELF"];
    $search=substr(strchr($originPath,"?"),1);
    $reg='/&8pages=\d*/';
    $search=preg_replace($reg,"",$search);

    if(isset($_GET["pages"])){
        $curentPages=$_GET["pages"];
    }else{
        $curentPages=0;
    }
    $this->fullPath=$path."?".$search."&pages=".$curentPages;
    }

    public function show(){
    $this->getUrlInfo();
    $str="";
    $str.="<a href='{$this->fullPath}0>[首页]</a>";
    }
}

$pages=new pages();
$this->$pages->getUrlInfo();
