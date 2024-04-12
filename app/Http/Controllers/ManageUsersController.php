<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use DB;
use Auth;

class ManageUsersController extends Controller
{

  public function home() {
    return redirect('admin_manage_users');
  }


  public function index() {
    return view('pages/admin_manage_users');
  }



  public function searchUser(Request $request){

    if (!Auth::check()) return redirect('/login');
    $this->authorize('search', User::Class);
    $users = array();
    $all = User::all();

    $search = $request->input('search');
    $search = strtolower($search);

    foreach ($all as $item) {
        if (str_contains($item['name'], $search) or str_contains(strtolower($item['email']), $search) or str_contains($item['phone_number'], $search) or str_contains($item['nif'], $search) 
            or str_contains($item['address'], $search) or str_contains($item['city'], $search) or str_contains($item['country'], $search)){
                $users[$item['id']] = ["id" => $item['id'],"name" => $item['name'], "email" => $item['email'], "phone_number" => $item['phone_number'], "nif" => $item['nif'], "address" => $item['adress'],
                "city" => $item['city'], "is_admin" => $item['is_admin'], "country" => $item['country'], "is_blocked" => $item['is_blocked']];
        }
      }
    return view('pages/admin_manage_users', ["users"=>$users]);

  }

  public function getUsers(){
    if (!Auth::check()) return redirect('/login');
    $this->authorize('get', User::Class);
    $users = array();
    $all = User::all();

    foreach ($all as $item) {
      $users[$item['id']] = ["id" => $item['id'],"name" => $item['name'], "email" => $item['email'], "phone_number" => $item['phone_number'], "nif" => $item['nif'], "address" => $item['adress'],
        "city" => $item['city'], "is_admin" => $item['is_admin'], "country" => $item['country'], "is_blocked" => $item['is_blocked']];
    }


    return view('pages/admin_manage_users', ["users"=>$users]);

  }

  public function editUser(Request $request,$id){
    if (!Auth::check()) return redirect('/login');
    $this->authorize('editUser', User::Class);


    $userID = User::find($id);

    $name = $request->input('name');
    $email = $request->input('email');
    $password = bcrypt($request->input('password'));
    $address = $request->input('address');
    $city = $request->input('city');
    $country = $request->input('country');



    $array = [
    'name' => $name,
    'email' => $email,
    'password' => $password,
    'address' => $address,
    'city' => $city,
    'country' => $country
    ];

    DB::table('user')->where('id', $userID)->update(['array' => $array]);

    return redirect('admin_manage_users');

    }

  public function deleteUser($id){
    if (!Auth::check()) return redirect('/login');
    $this->authorize('delete', User::Class);

      User::find($id)->delete();

      return back();
  }

  public function addAdministrator(Request $request){ //get last admin id

    if (!Auth::check()) return redirect('/login');
    $this->authorize('addAdmin', User::Class);
    $lastUser = User::select('id')->orderBy('id','desc')->first(); //get last user id
    
    if($request->input('name')==null or
        $request->input('email')==null or
        $request->input('password')==null){

        return redirect()->back()->with('alert', 'Please fill every space');
    }
    else{
      $name = $request->input('name');
      $email = $request->input('email');
      $password = bcrypt($request->input('password'));
      $is_admin = true;


      $array = [
        'id' => $lastUser['id']+1,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'is_admin' => $is_admin
        ];

        DB::table('user')->insert($array);
    }

    return redirect('admin_manage_users');


  }

  public function toggleBlock($id){
    if (!Auth::check()) return redirect('/login');
    //$this->authorize('toggleBlock', User::Class);

      //User::find($id)->delete();
      $userID = User::find($id);
      

      if($userID->is_blocked){
        $newState = FALSE;
        DB::table('user')->where('id', $id)->update(['is_blocked' => $newState]);
      }
      else{
        $newState = TRUE;      
        DB::table('user')->where('id', $id)->update(['is_blocked' => $newState]);
      }

      return redirect('admin_manage_users');
  }




  public function addUser(Request $request){
    if (!Auth::check()) return redirect('/login');
    $this->authorize('addUser', User::Class);


    $lastUser = User::select('id')->orderBy('id','desc')->first(); //get last user id


    if($request->input('name')==null or
        $request->input('email')==null or
        $request->input('password')==null or
        $request->input('address')==null or
        $request->input('city')==null or
        $request->input('country')==null) {

            return redirect()->back()->with('alert', 'Please fill every space');
    }
    else{
      $name = $request->input('name');
      $email = $request->input('email');
      $password = bcrypt($request->input('password'));
      $address = $request->input('address');
      $city = $request->input('city');
      $country = $request->input('country');



      $array = [
        'id' => $lastUser['id']+1,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'address' => $address,
        'city' => $city,
        'country' => $country
        ];

        DB::table('user')->insert($array);

    }

    return redirect('admin_manage_users');

    }

}