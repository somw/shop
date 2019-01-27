<?php
namespace app\admin\controller;


class Index 
{
    public function index()
    {
        return view();

    }
    public function index1($num)
    {
        echo '这是index控制器下的index1操作方法，我们只能接受2~4位的整数，当前值为'.$num;

    }
    public function index2($str)
    {
        echo '这是index控制器下的index2操作方法，我们只能接受1个以上的字母，当前值为'.$str;

    }
    public function index3($bool)
    {
        echo '这是index控制器下的index3操作方法，我们只能接受布尔，当前值为'.$bool;

    }
}  
