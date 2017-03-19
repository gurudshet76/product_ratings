<?php

namespace ProductRatings\Http\Controllers;

use App\Item;
use DB;
use File;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class ImportFiles extends Controller
{
    //
    //-- Import product information from xls, xlsx, csv files 
    public function importExcelFile()
    {
      if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
            $loc_name = Session::get('loc_name');

			$data = Excel::load($path, function($reader) {
	        })->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = [
                                'loc_name' => $loc_name,
                                'prod_id' => $value->id, 
                                'prod_name' => $value->name,
                                'prod_desc' => $value->description, 
                                'camera_type' => $value->camera,
                                'weight' => $value->weight,
                                'storage_size' => $value->maxstorage, 
                                'price' => $value->price
                            ];
				}
				if(!empty($insert)){
					DB::table('prod_info')->insert($insert);
					return Redirect::to('/prodinfo');
				}
			} 

		}  
    }

    //-- Import json file format to product ratings table
    public function importJsonFile(){
        $loc_name = Session::get('loc_name');
        if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
            //-- Check for json file to upload to ratings table
            $json = File::get($path);
            if(!empty($json)){
                $data = json_decode($json);
                if(!empty($data)){
                    //-- Prepare the query to insert data.
                        foreach ($data as $obj) {
                            $name = $obj->name;
                            $description = $obj->description;
                            $reviews = $obj->reviews;
                            foreach($reviews as $rev){
                                $insert[] = [
                                            'loc_name' => $loc_name,
                                            'prod_name' => $name,
                                            'prod_descr' => $description,
                                            'user_name' => $rev->name,
                                            'user_ratings' => $rev->rating,
                                            'ratings_desc' => $rev->description
                                        ];
                            }
                        }
                    if(!empty($insert)){
                        DB::table('product_ratings')->insert($insert);
                        return Redirect::to('/prodratings');
				    }
                }
            }
        }
            
    }
}
