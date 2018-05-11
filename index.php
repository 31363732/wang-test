<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

//当前路径
define('SITE_PATH',getcwd().'/');

//定义缓存目录
define('RUNTIME_PATH',SITE_PATH.'#runtime/');

//项目目录
define('PROJECT_PATH',SITE_PATH.'Pact/');
define('DIR_SECURE_FILENAME', 'index.html');//安全文件
define('DIR_SECURE_CONTENT', 'no Access!');//安全文件

// 定义目录
define('APP_PATH',PROJECT_PATH.'App/');
define('COMMON_PATH',PROJECT_PATH.'Common/');

//核心目录
define('THINK_PATH',PROJECT_PATH.'Core/');
// 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单