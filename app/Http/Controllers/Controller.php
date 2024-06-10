<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

abstract class Controller
{
   public function validate(Request $request, array $rules, array $messages = []){
          // Create a Validator instance and perform validation
          $validator = Validator::make($request->all(), $rules, $messages);

           // Check if the validation fails
        if ($validator->fails()) {
            // If validation fails, redirect back with errors and input
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
   }
}
}
