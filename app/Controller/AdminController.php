<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{
	public function indexAdmin(){

		$this->show('admin/index');
	}
}