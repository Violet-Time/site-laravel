<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Types;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image; 


class TypesController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct(); 	
		  
    }
    public function types()    { 
        
              
        $types = Types::orderBy('name')->get();
        
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
         
        return view('admin.pages.types',compact('types'));
    }
    
    public function addeditType()    { 
         
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        
        return view('admin.pages.addedittype', [
            'types'   => [],
            'categories' => Types::with('children')->where('parent_id', '0')->get(),
            'delimiter'  => ''
        ]);
    }
    
    public function addnew(Request $request)
    { 
    	
    	$data =  \Input::except(array('_token')) ;
	    
	    $rule=array(
		        'name' => 'required',
                'type' => 'required',
                'parent_id' => 'required'
		   		 );
	    
	   	 $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withErrors($validator->messages());
        } 
	    $inputs = $request->all();
		
		if(!empty($inputs['id'])){
           
            $type_obj = Types::findOrFail($inputs['id']);

        }else{

            $type_obj = new Types;

        }

        //News image


        $type_obj->name = $inputs['name'];
		$type_obj->type = $inputs['type'];
        $type_obj->parent_id = $inputs['parent_id'];
		 
		
		 
	    $type_obj->save();
		
		if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }		     
        
         
    }     
    
    public function editType($id)    
    {     
    
    	  if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	     
          $type = Types::findOrFail($id);
          
          return view('admin.pages.addedittype',compact('type'), [
              'categories' => Types::with('children')->where('parent_id', '0')->get(),
              'delimiter'  => ''
              ]);
        
    }	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');
            
        }
        	
        $type = Types::findOrFail($id);
        $type->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }
     
    	
}
