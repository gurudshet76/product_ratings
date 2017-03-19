<?php

namespace ProductRatings\Http\Controllers;

use DB;
use View;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class ManagerDashBoardController extends Controller
{
    //
    //-- Display product information list
    public function getProductInfoData(){
        $loc_name = Session::get('loc_name');
        $role_level = Session::get('role_level');
        if($role_level == "1"){
            $prods = DB::select('select cnt_id, loc_name, prod_id, prod_name, prod_desc, camera_type,
                            weight, storage_size, price FROM prod_info
                            ORDER BY cre_dt DESC');
            
            return View::make('products')->with('prods', $prods)
                                     ->with('role_level', $role_level)
                                     ->with('loc_name', $loc_name);
        }

        $prods = DB::select('select cnt_id, loc_name, prod_id, prod_name, prod_desc, camera_type,
                            weight, storage_size, price FROM prod_info
                            WHERE loc_name = ? ORDER BY cre_dt DESC', [$loc_name]);
      
        if($role_level == "2"){                 
            return View::make('sproducts')->with('prods', $prods)
                                     ->with('role_level', $role_level)
                                     ->with('loc_name', $loc_name);
        }
        return View::make('vproducts')->with('prods', $prods)
                                    ->with('role_level', $role_level)
                                    ->with('loc_name', $loc_name);
    }

    //-- Delete selected product
    public function deleteSelectedProds (){
        $input = Input::all();
       
       if(!empty($input)){
            $checkedProds[] = $input['checkedprods'];
        
            foreach ($checkedProds as $id ) {
                DB::table('prod_info')->where('cnt_id', '=', $id)->delete();
            }
       }
       return Redirect::to('/prodinfo');
    }

    //-- Add product info
    public function addproduct () {
         $input = Input::all();

         $loc_name = Session::get('loc_name');
        
         $insert [] = [
                'loc_name' => $loc_name,
                'prod_id' => $input['productid'],
                'prod_name' => $input['productname'],
                'prod_desc' => $input['productdesc'],
                'camera_type' => $input['camera_type'],
                'weight' => $input['weight'],
                'storage_size' => $input['storagesize'],
                'price' => $input['price']
            ];

        if(!empty($insert)){
            DB::table('prod_info')->insert($insert);
        }
        return Redirect::to('/prodinfo');
    }

    //-- Edit product Info
    public function editProdInfo (){
        $input = Input::all();
        $loc_name = Session::get('loc_name');
        //dd($input);
         
        if(!empty($input)){
            DB::table('prod_info')->where('prod_name', $input['product_name'])
                                  ->update(['loc_name' => $loc_name,
                'prod_id' => $input['product_id'],
                'prod_name' => $input['product_name'],
                'prod_desc' => $input['product_desc'],
                'camera_type' => $input['cameratype'],
                'weight' => $input['weight_g'],
                'storage_size' => $input['storagesize_m'],
                'price' => $input['price_v']
                ]);
           
        }
        return Redirect::to('/prodinfo');
    }


    public function getsvProdRatings(){
        $loc_name = Session::get('loc_name');
        $role_level = Session::get('role_level');

        $prodratings = DB::select('select rating_id,prod_name,prod_descr,user_name,user_ratings,ratings_desc,cre_dt,upd_dt FROM product_ratings
                                        WHERE loc_name=? ORDER BY cre_dt DESC', [$loc_name]);
        $rating1 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                            FROM product_ratings WHERE loc_name=?
                                             AND user_ratings BETWEEN 1 AND 1.9', [$loc_name]);
        $rating2 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                            FROM product_ratings WHERE loc_name=?
                                            AND user_ratings BETWEEN 2 AND 2.9', [$loc_name]);
        $rating3 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                            FROM product_ratings WHERE loc_name=?
                                            AND user_ratings BETWEEN 3 and 3.9', [$loc_name]);
        $rating4 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                            FROM product_ratings WHERE loc_name=?
                                            AND user_ratings BETWEEN 4 and 4.9', [$loc_name]);
        $rating5 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                            FROM product_ratings WHERE loc_name=?
                                            AND user_ratings = 5', [$loc_name]);
        $avgRatings = DB::select('select TRUNCATE(AVG(user_ratings), 1) as avgratings, count(rating_id) as count FROM product_ratings WHERE loc_name=?', [$loc_name]);

        $products = DB::select('select prod_name, prod_desc from prod_info WHERE loc_name=?', [$loc_name]);

        if($role_level == "2"){
            return View::make('sratings')->with('products', $products)
                                        ->with('ratings', $prodratings)
                                        ->with('rating1', $rating1[0])
                                        ->with('rating2', $rating2[0])
                                        ->with('rating3', $rating3[0])
                                        ->with('rating4', $rating4[0])
                                        ->with('rating5', $rating5[0])
                                        ->with('avgRatings', $avgRatings[0]);
        } elseif($role_level >= "3"){
            return View::make('vratings')->with('products', $products)
                                        ->with('ratings', $prodratings)
                                        ->with('rating1', $rating1[0])
                                        ->with('rating2', $rating2[0])
                                        ->with('rating3', $rating3[0])
                                        ->with('rating4', $rating4[0])
                                        ->with('rating5', $rating5[0])
                                        ->with('avgRatings', $avgRatings[0]);
        }
    }

    //-- Populate product ratings.
    public function getManageProdRatings (){
        $role_level = Session::get('role_level');
        if($role_level == "1"){
            $prodratings = DB::select('select rating_id,prod_name,prod_descr,user_name,user_ratings,ratings_desc,cre_dt,upd_dt FROM product_ratings ORDER BY cre_dt DESC');
            $rating1 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                                FROM product_ratings WHERE user_ratings BETWEEN 1 AND 1.9');
            $rating2 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                                FROM product_ratings WHERE user_ratings BETWEEN 2 AND 2.9');
            $rating3 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                                FROM product_ratings WHERE user_ratings BETWEEN 3 and 3.9');
            $rating4 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                                FROM product_ratings WHERE user_ratings BETWEEN 4 and 4.9');
            $rating5 = DB::select('select COUNT(user_ratings) AS ratings, ROUND((COUNT(user_ratings)/(SELECT COUNT(rating_id)FROM product_ratings))*100) AS percentage 
                                                FROM product_ratings WHERE user_ratings = 5');
            $avgRatings = DB::select('select TRUNCATE(AVG(user_ratings), 1) as avgratings, count(rating_id) as count FROM product_ratings');

            $products = DB::select('select prod_name, prod_desc from prod_info');

        
            return View::make('ratings')->with('products', $products)
                                        ->with('ratings', $prodratings)
                                        ->with('rating1', $rating1[0])
                                        ->with('rating2', $rating2[0])
                                        ->with('rating3', $rating3[0])
                                        ->with('rating4', $rating4[0])
                                        ->with('rating5', $rating5[0])
                                        ->with('avgRatings', $avgRatings[0]);
        }
       
       return $this->getsvProdRatings();
    }


    //-- Add new product ratings.
    public function addUserRatings () {

         $input = Input::all();

         $prodDesc = DB::select('select prod_desc from prod_info where prod_name=?',[$input['productname']]);

         $insert[] = [
                    'loc_name' => 'IN',
                    'prod_name' => $input['productname'],
                    'prod_descr' => $prodDesc[0]->prod_desc,
                    'user_name' => $input['customer_name'],
                    'user_ratings' => $input['ratings'],
                    'ratings_desc' => $input['comments']
                ];

        if(!empty($insert)){
            DB::table('product_ratings')->insert($insert);
        }
        return Redirect::to('/prodratings');
    }
}
 