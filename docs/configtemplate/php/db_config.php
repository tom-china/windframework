<?php
/**
 * @author xiaoxia xu <xiaoxa.xuxx@aliyun-inc.com> 2011-3-8
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2110 phpwind.com
 * @license 
 */
/**
 * dbConfig的配置
 * 可以配置多个链接，多个链接的时候必需指定每个链接的type类型是master/slave，当配置一个的时候可以不配置type项 
 */
return array(
	'myConnection' => array(
		'driver' => 'mysql',
		'host' => 'localhost',
        'type' => 'master',
		'user' => 'root',
		'password' => '',
		'port' => '3306',
		'name' => 'phpwind',
		'charset' => 'utf8',
	),
);