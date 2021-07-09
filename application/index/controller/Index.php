<?php
namespace app\index\controller;

use MongoDB\Driver\Server;
use app\common\controller\Index as commonIndex;

class Index
{
    public function index()
    {
        var_dump(config());
    }

    public function common()
    {
//        return "common";

        echo "index_common ";
        $common = new commonIndex();
        return $common->index();
    }

    public function info($id){
        // localhost/index/Index/info/id/5
        // localhost/news/5.html
        return "{$id}";
    }


    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function sayHello()
    {
        $Test = new \my\Test();
        $Test->sayHello();
    }

    public function json()
    {
        // 输出JSON
        $data = array("aa"=>1,"bb"=>2,"cc"=>3,"dd"=>4);
        return json($data);
    }

}
