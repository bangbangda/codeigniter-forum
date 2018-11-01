<?php namespace App\Controllers;

use CodeIgniter\Controller;

/**
 * 论坛首页
 *
 * User: 郝亮
 * Date: 2018/10/31
 * Time: 7:06 PM
 */
class Index extends Controller
{

	/**
	 * 论坛首页
	 *
	 * @return string
	 */
	public function index()
	{
		return view('index');
	}
}
