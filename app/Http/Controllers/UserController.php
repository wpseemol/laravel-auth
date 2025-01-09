<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

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
    function UserRegistration(Request $request): JsonResponse
    {



        try {

            $validatedData = $request->validate([
                "firstName" => "required|string|max:50",
                "lastName" => "required|string|max:50",
                "email" => "required|string|unique:users,email",
                "mobile" => "required|string|max:30",
                "password" => "required|string|max:50"
            ], );


            // $validatedData["password"] = bcrypt($validatedData["password"]);


            $user = User::create($validatedData);

            return response()->json(["message" => "User registered successful!", "user" => $user], 201);

        } catch (Exception $error) {


            return response()->json([
                "status" => "failed",
                "message" => $error->getMessage(),
                "error" => $error
            ], 422);



        }



        // return $userArray;
    }


}
