<?php namespace Acme\Validation;

use Respect\Validation\Validator as Valid;

class Validator
{

  public function isValid($validation_data)
 {

   $errors = [];

   foreach ($validation_data as $name => $value)
    {

      //  $rules = explode("|", $value);

      //  foreach ($rules as $rule)
        // {

              if (isset($_REQUEST[$name]))
                  {
                        $exploded = explode(":", $value);

                        switch ($exploded[0])
                        {
                            case 'min':
                                $min = $exploded[1];
                                if (Valid::stringType()->length($min)->Validate($_REQUEST[$name]) == false) {
                                  $errors[] = $name . " Must be at least " . $min . " characters long!";
                                }

                                  break;

                            case 'email':
                                if (Valid::email()->Validate($_REQUEST[$name]) == false){
                                  $errors[] = $name . " Must be a valid email address! ";
                                }
                                  break;
                            case 'equalTo':
                                if (Valid::equals($_REQUEST[$name])->Validate($_REQUEST[$exploded[1]]) == false){
                                  $errors[] = " Value does not match verification value!";
                                }

                            default:
                            // do nothing
                        }

             } else{
               $errors[] = "No value found!";
             }
       }
       return $errors;
     }

}
