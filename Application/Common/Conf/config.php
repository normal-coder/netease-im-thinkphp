<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://normalcoder.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 诺墨 <normal@normalcoder.com><Wechat:normal1017>
// +----------------------------------------------------------------------
// | Remarks: 全局配置文件 (Module-BaseController)
// +----------------------------------------------------------------------
	return array(

		// ＝＝系统主题设置＝＝
		// 设置默认的模板主题
		'DEFAULT_THEME'  => 'Base',//当模块中没有设置主题，则模块主题会设置为此处设置的主题,主题名和模块名不能重复，如不能采用“Home”
		'DEFAULT_MODULE'        =>  'NIMWeb',  // 默认模块
		/* 模板相关配置 */
		//此处只做模板使用，具体替换在COMMON模块中的set_theme函数,该函数替换MODULE_NAME,DEFAULT_THEME两个值为设置值
		'TMPL_PARSE_STRING' => array(
			'__STATIC__' => __ROOT__ . '/Public/static',
			'__IMG__'    => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME/images',
			'__CSS__'    => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME/css',
			'__JS__'     => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME/js',
			'__Theme__'  => __ROOT__ . '/Public/MODULE_NAME/DEFAULT_THEME',
		),

		// 云信密钥设置
		'AppKey' => 'ddb5c997ed9e59eac630c8c1df134d7c',
		'AppSecret' => '42459770aeb5',
	);

