<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;

use DB;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return redirect('myprofile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/myprofile');
    }


    public function userView(){

        if (!Auth::check()) return redirect('/login');
        $this->authorize('view', auth()->user());
        $id = auth()->user()->id;
        $user = User::find($id);
        


        if($user !=null){
            $userArr = [
                "id" => $id,
                "name" => $user->name,
                "email" => $user->email,
                "phone_number" => $user->phone_number,
                "nif" => $user->nif,
                "address" => $user->address,
                "city" => $user->city,
                "country" => $user->country
            ];
        }
        else{
            $userArr = [
                "id" => $id,
                "name" => $user->name,
                "email" => $user->email,
                "phone_number" => "",
                "nif" => "",
                "address" => $user->address,
                "city" => $user->city,
                "country" => $user->country
            ];
        }
        session()->put('userinfo', $userArr);
        return view('pages/myprofile', ["userinfo"=>$userArr]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editUserInfo(Request $request)
    {
        if (!Auth::check()) return redirect('/login');
        $this->authorize('edit', auth()->user());
        $id = auth()->user()->id;
        $name = $request->input('name');
        $phone_number = $request->input('phone_number');
        $nif = $request->input('nif');
        $address = $request->input('address');
        $city = $request->input('city');
        $country = $request->input('country');

        if($name == null){
            return redirect()->back()->with('alert', 'Name must not be empty');
        }

        if($address == null){
            return redirect()->back()->with('alert', 'Address must not be empty');
        }

        if($city == null){
            return redirect()->back()->with('alert', 'City must not be empty');
        }

        if($country == null){
            return redirect()->back()->with('alert', 'Country must not be empty');
        }


        if($nif == null){
            $nif = "";
        }

        if($phone_number == null){
            $phone_number = "";
        }


        if (User::where('id', $id)->exists()) {

          DB::table('user')->where('id', $id)->update(["name" => $name]);
          DB::table('user')->where('id', $id)->update(['phone_number' => $phone_number]);
          DB::table('user')->where('id', $id)->update(['nif' => $nif]);
          DB::table('user')->where('id', $id)->update(['address' => $address]);
          DB::table('user')->where('id', $id)->update(["city" => $city]);
          DB::table('user')->where('id', $id)->update(['country' => $country]);
        }

        else{
          $updatedInfo = [['id' => $id,'name' => $name, 'phone_number' => $phone_number, 'nif' => $nif ,'address' => $address,'city' => $city,'country' => $country]];

          DB::table('user')->insertOrIgnore($updatedInfo);

        }


      return redirect('myprofile')->with('success', 'Changes were successful');
    }


    public function submitAccountData(Request $request){

        if (!Auth::check()) return redirect('/login');
        $this->authorize('submit', auth()->user());
        $id = auth()->user()->id;
        $email = $request->input('email');
    
        if($request->input('password')==null){
          return redirect()->back()->with('alert', 'Password must not be empty');
        }
        if(strlen($request->input('password'))<6){
          return redirect()->back()->with('alert', 'Password must contain 6 characters');
        }
    
        $password = bcrypt($request->input('password'));
    
        if($email == null){
          return redirect()->back()->with('alert', 'Email must not be empty');
        }
    
    
        DB::table('user')->where('id', auth()->user()->id)->update(["email" => $email]);
        DB::table('user')->where('id', auth()->user()->id)->update(["password" => $password]);
    
    
        return redirect('myprofile/account_data')->with('success', 'Changes were successful');
    
    }

    public function myOrders(){

        if (!Auth::check()) return redirect('/login');
        $id = auth()->user()->id;
        $orders = DB::table('orderlist')->where('user_id', $id)->get();
        //$this->authorize('list', $orders);
        return view('pages/myorders', ['orders' => $orders]);
    }

}
