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
     * 测试变量赋值
     * @return  mixed
     * @access public
     */
    public function testAssign()
    {
        $view_instance = \think\View::getInstance();
        $data = $view_instance->assign(array('key'=>'value'));
        $data = $view_instance->assign('key', 'value');
        //测试私有属性
        $this->assertAttributeEquals('value','pr',$view_instance); 
        //测试私有方法
        $method = new \ReflectionMethod('\think\View','test');
        $method->setAccessible(TRUE); 
        $this->assertEquals('test',$method->invoke($view_instance));

    }

    /**
     *  测试配置
     * @return  mixed
     * @access public
     */
    public function testConfig()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->config('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    } 


    /**
     *  测试引擎设置
     * @return  mixed
     * @access public
     */
    public function testEngine()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    }  

    /**
     *  测试引擎设置
     * @return  mixed
     * @access public
     */
    public function testTheme()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    } 


    /**
     *  测试引擎设置
     * @return  mixed
     * @access public
     */
    public function testFetch()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    }   

    /**
     *  测试显示
     * @return  mixed
     * @access public
     */
    public function testShow()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    } 

    /**
     *  测试引擎设置
     * @return  mixed
     * @access public
     */
    public function testParseTemplate()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    }

    /**
     *  测试引擎设置
     * @return  mixed
     * @access public
     */
    public function testGetTemplateTheme()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    }

    /**
     *  测试引擎设置
     * @return  mixed
     * @access public
     */
    public function testGetThemePath()
    {
        $view_instance = \think\View::getInstance();
        $data = $view->engine('key', 'value');
        $data = $view->engine('engine', array('key'=>'value'));
    }
}
