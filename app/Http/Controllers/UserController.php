<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



/**
 * Summary of UserController
 * User Controller has method to created or register user
 * `UserRegistration` method
 */
class UserController extends Controller
{
    //

    /**
     * User Registration method Write here
     * @param \Illuminate\Http\Request $request
     * @return User
     * Return User instance here.
     */
    function UserRegistration(Request $request): User|null
    {


        $firstName = $request->input("firstName");
        $lastName = $request->input("lastName");
        $email = $request->input("email");
        $mobile = $request->input("mobile");
        $password = $request->input("password");


        $result = User::create([
            "firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "mobile" => $mobile,
            "password" => $password

        ]);

        return $result;
    }


}
