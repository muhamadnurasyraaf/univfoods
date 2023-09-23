<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPhoneNumber implements ValidationRule
{
    public function passes($attribute,$value){
        $phonenumber = preg_replace('/[^0-9]/','',$value);

        if(strlen($phonenumber) >= 9 && strlen($phonenumber) <= 15){
            if($phonenumber[0] !== '+'){
                $phonenumber = '+6' . $phonenumber;
            }

            request()->merge([$attribute => $phonenumber]);

            return true;
        }

        return false;
    }

    public function message(){
        return 'Invalid Phone Number';
    }


    public function validate(string $attribute,mixed $value, Closure $fail){

    }
}
