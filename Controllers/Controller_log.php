<?php 

class Controller_Log extends Controller 
{
    public function action_default()
	{
		$this->action_home();
	}
	public function action_home()
	{
		$this->render("login");
	}

    public function action_traitement_login (){
        if (isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = $this->validateData($_POST['email']);
            $password = $this->validateData($_POST['password']);
            $m =Model::get_Model();
            $user = $m->get_user_from_email($email);

                // if (!$user || !password_verify($password, $user->password))  // La tu utilises un password_verify alors que le mot de passe n'est pas haché
                if (!$user || $password !== $user->password)  // La tu utilises un password_verify alors que le mot de passe n'est pas haché
                {
                    $message = "Identifiant incorrect";
                    $data = ['message' => "AHAAHHAHAHAHAHANAHJBHJBFEHBFU"];
                    $this->render("login", $data); // La condition !password_verify(.......) est true et donc tu retournes sur ta page de co
                } else {

                    
                    $this->userConnexion($user);
                }
        } else {
            $message = "Veuillez completer le formulaire";
            $data = ['message' => $message];
            $this->render("login",$data);
        }
    }

    public function action_inscription() {
        $this->render("signin");
}


	public function action_traitement_inscription() {
		$possibleRank = [1, 2];
		if(isset($_POST['mail'], $_POST['password'], $_POST['password-confirm'], $_POST['rank']) && !empty($_POST['mail']) && !empty($_POST['password-confirm']) && !empty($_POST['password']) && in_array($_POST['rank'], $possibleRank)
		&& preg_match('@[a-zA-Z]@', $_POST['password'])
		&& preg_match('@[0-9]@', $_POST['password'])
		&& strlen($_POST['password']) >= 6) {
			$mail = $this->validateData($_POST['mail'], 'mail');
			$password = $this->validateData($_POST['password']);
			$passwordConfirm = $this->validateData($_POST['password-confirm']);
			$rank = $_POST['rank'];

			$m=Model::get_model();
			
			$user = $m->get_user_from_mail($mail);
			if($password !== $passwordConfirm) {
				$message = "Les mots de passe ne sont pas identiques";
			}
			if($user) {
				$message = "Cette adresse mail est déjà utilisée";
			}
			if(isset($message)) {
				$data = ['message' => $message];
				$this->render("signin", $data);
			} else {
				$hash = password_hash($password, PASSWORD_DEFAULT);
				$user = $m->new_user($mail, $hash, $rank);
				$this->userConnexion($user);
			}
		} else {
			$message = "Veuillez completer correctement le formulaire";
			$data = ['message' => $message];
			$this->render("signin", $data);
		}
	}

    private function userConnexion($user) 
    {
        $data = ['user' => $user];
        $_SESSION['rank'] = $user->rank;
        if($user->rank == 1) 
        {
            $this->render("welcome_user",$data);
        } elseif($user->rank == 2) {
            $this->render("welcome_admin",$data);
        }
    }
}
?>