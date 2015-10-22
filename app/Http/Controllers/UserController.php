<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getIndex()
     {
         //
        return view('Users.index');
         //return view('LI.index');
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function postIndex(Request $request)
     {
         //
       $this->validate($request, [
           'users' => 'required|integer|min:1|max:100'
           ]);
           $data = $request->all();
           $count = $data['users'];
         //dd($request->all());
         $users_data = $this->getUsers($count);
         $arrlength = count($users_data);

         /*foreach($users_data as $person)
         {
           echo $person['name'].'<br/>';
           echo $person['address'].'<br/>';
           echo $person['email'].'<br/>';
         }*/

         return view('Users.postindex')->with(['data' => $data, 'users_data' => $users_data]);
         //return 'In post data for users';
     }

    /* Function to create the required number of users */
    public function getUsers($count) {

      $users_data=array();
      $faker = Faker\Factory::create();
      for ($i=0; $i < $count; $i++) {
        $person = array();
        $person['name'] = $faker->name;
        $person['address'] =  $faker->address;
        $person['email'] = $faker->email;
       //$faker->email, "<br/>";
        array_push($users_data, $person);

        }
        //dd($users_data);
        return $users_data;
    }
}
