<?php

class Controller_user extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	public function action_home()
	{
		$this->render("home");
	}

	public function action_email()
	{
		
		$m =Model::get_Model();
		$data = ["users"=>$m->get_email()];
		$this->render("user", $data);
	}

	public function action_delete_user()
	{
		$var = $_GET["id"];
		$m=Model::get_Model();
		$m->get_delete_user($var);
		$this-> action_email();
	}

	public function action_all_user_email()
	{
		$m=Model::get_Model();
		$data=["users"=>$m->get_all_user_email()];
		$this->render("all_user_email",$data);
	}

	public function action_one_user_email()
	{
		$var = $_POST['all_user_email'];
		$m=Model::get_Model();
		$data = ["users"=>$m->get_one_user_mail($var)];
		$this->render("one_user_email", $data);
	}
}