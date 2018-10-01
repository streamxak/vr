<?php
	return array(
		
		'job/([a-z]+)/page-([0-9]+)' => 'job/category/$1/$2',
		'job/([a-z]+)/([0-9]+)' => 'job/view/$1/$2',
		
		'job/page-([0-9]+)' => 'job/index/$1',
		'job/([a-z]+)' => 'job/category/$1',
		
		'job' => 'job/index',
		'cvs' => 'cvs/index',
		
		'company/detail/([a-z-]+)/([a-z-]+)/([0-9]+)' => 'company/detail/$1/$2/$3',
		'company/add' => 'company/add',
		'company/manage' => 'company/manage',
		
		'user/register' => 'register/userregister',
		'user/login' => 'login/userlogin',
		'user/logout' => 'login/userlogout',
		
		'' => 'main/index'
		
		);
?>