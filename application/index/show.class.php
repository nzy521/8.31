<?php

use \libs\smarty;
use \libs\db;
use \libs\getheader;

if (!defined("MVC")) {
    die("非法入侵");
}

class show
{
    function int()
    {
        $db=new db();
        $db=$db->db;
        $conid=$_GET["conid"];

        $result=$db->query("select * from mvc_content where conid=".$conid);
        $condata=$result->fetch_assoc();
        $smarty = new smarty();
        $header = new getheader();
        $smarty->assign("menuData", $header->menuData);
        $smarty->assign("header", "$header->header");
        $smarty->assign("footer", "$header->footer");

        $smarty->assign("condata", $condata);
        $smarty->display("index/show.html");
    }
}