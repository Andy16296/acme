<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{

   public function getShowHomePage()
    {
      echo $this->blade->render("home");
    }

}
