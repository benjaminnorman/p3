<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 10/6/2015
 * Time: 9:12 PM
 */

namespace project3\Http\Controllers;

class FakeUserController extends Controller {

    public function __construct(){
        //place setup code here to prepare for other functions to execute
    }

    public function getCreate(){
        return view('fakeuser.create');
    }

    public function postCreate(){
        if(($_POST['numUsers'] < 1) || ($_POST['numUsers'] > 100)){
            return view('errors.inputCheck');
        }

        $usersArray = [];

        for($i=1; $i<=$_POST['numUsers']; $i++) {
            //generate fake credentials for a user
            $faker = \Faker\Factory::create();
            $name = $faker->name;
            $address = $faker->address;

            //create a new user using the generated credentials
            $user = array(
                'name' => $name,
                'address' => $address
                );
            //add the new user to the array of all users
            $usersArray[$i] = $user;
        }

        return view('fakeuser.show')->with('usersArray', $usersArray);
    }
}