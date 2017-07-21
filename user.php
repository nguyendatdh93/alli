<?php 
	/**
	 * Main code.
	 */
	require 'UserModel.php';
	$user = new UserModel();
	// get method of api
	$method = $_SERVER['REQUEST_METHOD'];
	$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
	$email = array_shift($request);
	switch ($method) {
	  case 'GET':
	    $data = $user->infor($email);
	    echo json_encode($data);
	    break;
	  case 'POST':
	    $result = $user->edit($email,$_POST);
	    echo json_encode($result);
	    break;
	}
?>