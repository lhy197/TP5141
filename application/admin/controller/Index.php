<?php
namespace app\admin\controller;

use app\common\controller\Index as commonIndex;

class Index
{

    public function index()
    {
        print_r(config());
    }

    public function common()
    {
//        return "common";

        echo "admin_common ";
        $common = new commonIndex();
        return $common->index();
    }

}