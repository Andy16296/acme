<?php
namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
{

  //  public function getShowHomePage()
    //{
        //include(__DIR__ . "/../../views/home.php");
        //echo $this->twig->render('home.html');
    //}

    public function getShowRegisterPage()
    {
        //include(__DIR__ . "/../../views/register.html");
        //echo $this->twig->render('register.html');
        echo $this->blade->render("register");
    }

    public function postShowRegisterPage()
    {
        $errors = [];

        $validation_data = [
          'first_name' => 'min:3',
          'last_name' => 'min:3',
          'email' => 'email',
          'verify_email' => 'email',
          'password' => 'min:3',
          'email' => 'equalTo:verify_email',
          'password' => 'equalTo:verify_password',
      ];
      // validate data
      $validator = new Validator();

      $errors = $validator->isValid($validation_data);

    //  print_r($errors);
    //  exit();

      // if validation fails, go back to register
      // page and display error message


      if (sizeof($errors) >0) {
        $_SESSION['msg'] = $errors;
        echo $this->blade->render('register');
        unset($_SESSION['msg']);
        exit();
      }
      // save this data into a database
        $user = new User;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();

        echo "Posted!";
    }

    public function getShowLoginPage()
    {
      //  include(__DIR__ . "/../../views/login.html");
    //  echo $this->twig->render('login.html');
        echo $this->blade->render("login");
    }


}
