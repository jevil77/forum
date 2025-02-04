<?php
namespace Controller;

use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\UtilisateurManager;

class SecurityController extends AbstractController{
    // contiendra les méthodes liées à l'authentification : register, login et logout



    public function registerForm(){

        return [
            "view" => VIEW_DIR."security/register.php",
            "meta_description" => "Formulaire d'inscription"
         
        ];


    }



    public function register () {
 

              if(isset($_POST["submit"])) {


                $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $mail = filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
                $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $password_confirm = filter_input(INPUT_POST, "password_confirm", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


               
                
                if($nom && $prenom && $mail && $pseudo && $password && $password_confirm && $role) {
                    
                    // var_dump($mail); die;
                    
                    //var_dump($nom, $prenom, $mail, $pseudo, $password, $password_confirm, $role ); die;
                    $utilisateurManager = new UtilisateurManager();
                    
                    $utilisateur = $utilisateurManager->findOneByEmail($mail);
                    //$requete = $utilisateur->findBy(["mail" => $mail]);
                    
                    var_dump($utilisateur);

                    if ($utilisateur) {
                        echo "Un compte avec cet email existe déjà.";
                        exit; 
                    } else {
                       
                        if($password == $password_confirm && strlen($password) >= 5) {
                            $insertUtilisateur = $pdo->prepare("INSERT INTO user (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");
                            $insertUtilisateur->execute([
                                "pseudo"=> $pseudo,
                                "mail"=> $mail,
                                "password"=> password_hash($password, PASSWORD_DEFAULT)
                            ]) ;  
                            header("Location: login.php"); exit;

                       



                            }




                    }



                         
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                         //  $user = $requete = findAll();

                        //  if($user) {


                        //  }

                    // $requete = $pdo->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
                    // $requete->execute(["mail" => $mail]);
                    // $utilisateur = $requete->fetch();
                   
                    // // si l'utilisateur existe
                    // if($utilisateur) {
                    //     header("Location: index.php?ctrl=security&action=register"); exit;
                    // } else {
                    //     var_dump("Utilisateur inexistant"); exit;


                    // }





                }

                







                
             }
    }


















    // public function login () {}
    // public function logout () {}
}