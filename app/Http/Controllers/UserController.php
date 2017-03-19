<?php

namespace ProductRatings\Http\Controllers;

use DB;
use View;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    //
     /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('user_info')->get();

        return view('user.index', ['users' => $users]);
    }

    public function launchUserList()
    {
        $usersInfo = DB::table('user_info')
                    ->join('user_roles', 'user_info.role_id', '=', 'user_roles.role_id')
                    ->join('user_roles_permission', 'user_info.role_id', '=', 'user_roles_permission.role_id')
                    ->select('user_info.us_id',
                        'user_info.user_name',
                        'user_info.user_email',
                        'user_info.mobile_no',
                        'user_info.loc_name',
                        'user_info.role_id',
                        'user_info.user_desc',
                        'user_roles.role_level',
                        'user_roles.role_desc',
                        'user_roles_permission.idx',
                        'user_roles_permission.role_view',
                        'user_roles_permission.role_create',
                        'user_roles_permission.role_update',
                        'user_roles_permission.role_delete')
                    ->get();
        
        $userRoles = DB::select ('SELECT role_id, role_desc, role_level FROM user_roles');

        $locations = DB::select('SELECT loc_id, loc_desc FROM location');

        return View::make('users')->with('usersInfo', $usersInfo)
                                ->with('userroles', $userRoles)
                                ->with('location', $locations);
    }

    public function deleteUser() {
        $input = Input::all();
       
       if(!empty($input)){
            $checkedUsers[] = $input['checkedUsers'];
        
            foreach ($checkedUsers as $id ) {
                DB::table('user_info')->where('us_id', '=', $id)->delete();
            }
       }
       return Redirect::to('/userinfo');
    }

    public function addUserInfo() {
        $input = Input::all();

        if(!empty($input)){
            
            $roleid = DB::select('SELECT role_id FROM user_roles WHERE role_level = ?', [$input['userrole']]);
            //dd($roleid);
            $insert [] = [
                    'user_name' => $input['username'],
                    'user_email' => $input['useremail'],
                    'mobile_no' => $input['mobileno'],
                    'password' => Hash::make($input['password']),
                    'loc_name' => $input['location'],
                    'role_id' => $roleid[0]->role_id,
                    'user_desc' => $input['userdesc']
                ];

            if(!empty($insert)){
                DB::table('user_info')->insert($insert);
            }
        }
        return Redirect::to('/userinfo');     
    }

    public function editUserInfo() {
        $input = Input::all();
        //dd($input);
         
        if(!empty($input)){
            $roleid = DB::select('SELECT role_id FROM user_roles WHERE role_level = ?', [$input['user_role']]);

            DB::table('user_info')->where('us_id', $input['us_id'])
                                  ->update(['loc_name' => $input['location'],
                'user_name' => $input['user_name'],
                'password' => Hash::make($input['password']),
                'user_desc' => $input['user_desc'],
                'role_id' => $roleid[0]->role_id
                ]);
        }
        return Redirect::to('/userinfo');
    }


    //---- Permission Management
    public function permissionOnRole () {
        $userroles = DB::table('user_roles')
                    ->join('user_roles_permission', 'user_roles.role_id', '=', 'user_roles_permission.role_id')
                    ->select('user_roles.role_id',
                        'user_roles.role_level',
                        'user_roles.role_desc',
                        'user_roles_permission.idx',
                        'user_roles_permission.role_view',
                        'user_roles_permission.role_create',
                        'user_roles_permission.role_update',
                        'user_roles_permission.role_delete')
                    ->get();

        return View::make('userroles')->with('userroles', $userroles);
    }

    public function deleteRole () {
        $input = Input::all();
       
       if(!empty($input)){
            $checkedUsersRoles[] = $input['checkedUsersRoles'];
        
            foreach ($checkedUsersRoles as $roleid ) {
                DB::table('user_roles_permission')->where('role_id', '=', $roleid)->delete();
                DB::table('user_roles')->where('role_id', '=', $roleid)->delete();
            }
       }
       return Redirect::to('/userrolesmgmt');
    }

    public function addRole() {
        $input = Input::all();

        if(!empty($input)){
            $roleid = DB::select('SELECT role_id FROM user_roles WHERE role_level = ?', [$input['role_level']]);
            //dd($roleid);
            if(empty($roleid)){
                                           
                $id =  DB::table('user_roles')->insertGetId(
                        array('role_level' => $input['role_level'],
                        'role_desc' => $input['role_desc']));
                //dd($id);
                if(!empty($id)) //-- create entry in permission table
                {    
                    $insertperm[] = [
                            'role_id' => $id,
                            'role_view' => $input['role_view'], 
                            'role_create' => $input['role_create'], 
                            'role_update' => $input['role_update'],
                            'role_delete' => $input['role_delete']  
                        ];
                    if(!empty($insertperm)){
                        DB::table('user_roles_permission')->insert($insertperm);
                    }
                    //dd($id);     
                }
                
            }
        }
       return Redirect::to('/userrolesmgmt');
    }

    public function editRole() {
        $input = Input::all();

        if(!empty($input)){
            DB::table('user_roles_permission')->where('role_id', $input['roleid'])
                                  ->update(['role_view' => $input['roleview'],
                                    'role_create' => $input['rolecreate'],
                                    'role_update' => $input['roleupdate'],
                                    'role_delete' => $input['roledelete'],
            
                ]);
        }
        return Redirect::to('/userrolesmgmt');
    }


}
