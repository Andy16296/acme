<?php
namespace Acme\Controllers;

use Acme\Validation\Validator;
use Acme\Models\User;

class PageController
{
  protected $loader;
    protected $twig;

    public function __construct()
    {
      $this->loader = new \Twig_Loader_Filesystem(__DIR__ .'/../../views');
      $this->twig = new \Twig_Environment($this->loader,[
        'cache' => false,
        'debug' => true
      ]);
    }

    public function getShowHomePage()
    {
        //include(__DIR__ . "/../../views/home.php");
        echo $this->twig->render('home.php');
    }

    public function getShowRegisterPage()
    {
        include(__DIR__ . "/../../views/register.php");
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
        header("Location: /register");
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
        include(__DIR__ . "/../../views/login.php");
    }

    public function getTestDB()
    {
        $user = User::find(1);
        echo "User's name is " . $user->first_name . " " . $user->last_name;
    }
}
