<?php

namespace ProductRatings\Http\Controllers;
use DB;
use View;
use Hash;
use Validator;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    // private $user;
    //
    
    public function login(){
       
        //-- Validating just user info. to handle some use cases. 
        //-- not with actual auth token validations
      
        $input = Input::all();
      
        $location = $input['location'];
        
        if(Input::get('visitor') == 'yes'){
            
             Session::put('role_level', '3');
             Session::put('loc_name', $location);

             return View::make('visitordash');
        }
        else {
            
            if(!empty($input['email']) &&  !empty($input['password']) && !empty($input['location'])) 
            {
                $user = DB::select ('SELECT A.user_name, A.user_email, A.mobile_no, 
                                    A.loc_name,
                                    A.password,
                                    A.role_id,
                                    B.role_level,
                                    B.role_desc
                                    FROM user_info A, user_roles B
                                        where A.user_email = ?
                                        AND A.loc_name = ?
                                        AND A.role_id = B.role_id',
                                                [$input['email'], $location]);

                if(!empty($user)){                                
                    if(Hash::check($input['password'], $user[0]->password)) 
                    {
                        
                        $data =  array(
                                'user_name' => $user[0]->user_name,
                                'email'  =>  $user[0]->user_email,
                                'mobile_no'  =>  $user[0]->mobile_no,
                                'role_level' => $user[0]->role_level,
                                'role_desc' => $user[0]->role_desc,
                                'loc_name' => $user[0]->loc_name
                            );
                        
                        Session::put('role_level', $user[0]->role_level);
                        Session::put('loc_name', $user[0]->loc_name);

                        // $role_level = Session::get('role_level');
                        // $loc_name = Session::get('loc_name');
                        //dd($loc_name);
                        //dd($user[0]->role_level);
                        if ($user[0]->role_level == "1")
                        { 
                            //dd($user[0]->role_level);
                            return View::make('managerdash')->with($data);
                        }
                        if($user[0]->role_level == "2")   
                        {
                            //dd("Staff..");
                            return View::make('staffdash')->with($data);
                        }   
                        if($user[0]->role_level == "3") 
                        {
                            return View::make('visitordash')->with($data);
                        }
                    }
                }
            }
        }
       
        return View::make('login');
    }

    public function logout(){
        Session::forget('role_level');
        Session::forget('loc_name');

        return View::make('login');
    }
}
