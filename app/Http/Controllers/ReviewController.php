<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller{

    public function addReview($productID, $userId){

        if (!Auth::check()) return redirect('/login');
        //$this->authorize('addUser', User::Class);

        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['radio'])) {

            $title = $_POST['title'];
            $content = $_POST['content'];
            $score = $_POST['radio'];
            $id = DB::table('review')->max('id') + 1;

            $data = array('id' => $id, "title" => $title, "content" => $content, "score" => $score, 'product_id' => $productID,"user_id" => $userId);
            DB::table('review')->insert($data);

            return redirect()->route('openProduct', ['id' => $productID])->with('success', 'Changes were successful');
        }
        else{
            return redirect()->back()->with('alert', 'Please fill in every space');
        }
    }

    public function editReview(Request $request,$id){
        if (!Auth::check()) return redirect('/login');
        //$this->authorize('editReview', Review::Class);
    
        $reviewID = DB::table('review')->find($id);
        $productID = $reviewID->product_id;
    
        $title = $request->input('title');
        $content = $request->input('content');
        $score = $request->input('radio');
   

        DB::table('review')->where('id', $id)->update(['title' => $title]);
        DB::table('review')->where('id', $id)->update(['content' => $content]);
        DB::table('review')->where('id', $id)->update(['score' => $score]);

    
        return redirect()->route('openProduct', ['id' => $productID])->with('success', 'Changes were successful');
    
        }

/*
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
        
            }  */  

    public function deleteReview($reviewID){

        if (!Auth::check()) return redirect('/login');
        //$this->authorize('add', User::class);
        $productID = DB::table('review')->find($reviewID)->product_id;
        DB::table('review')->delete($reviewID);


        return redirect()->route('openProduct', ['id' => $productID])->with('success', 'Changes were successful');
    }



}