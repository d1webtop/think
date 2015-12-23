<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
/**
 * view测试
 * @author    mahuan <mahuan@d1web.top>
 */
namespace tests\framework\thinkphp\library\think\cache\driver;

class viewTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * 句柄测试
     * @return  mixed
     * @access public
     */
    public function testGetInstance()
    {
        $view_instance = \think\View::getInstance();
        $this->assertInstanceOf('\think\view',$view_instance,'getInstance方法返回错误');
    }

    /**
     * 句柄测试
     * @return  mixed
     * @access public
     */
    public function testAssign()
    {
    }
    
}
