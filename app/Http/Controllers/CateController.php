<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Category;

class CateController extends Controller {

	public function getList(){

		$data = Category::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
		return view('admin.category.list',compact('data'));
	}

	public function getAdd()
	{
		$parent = Category::select('id','name','parent_id')->get() ->toArray();
		return view('admin.category.add',compact('parent'));
	}
	public function postAdd(CateRequest $request){
		$cate = new Category;
		$cate ->name		= $request ->txtCateName;
		$cate ->alias		= changeTitle($request ->txtCateName);
		$cate ->order		= $request ->txtOrder;
		$cate ->parent_id	= $request->sltParent;
		$cate ->keywords	= $request ->txtKeywords;
		$cate ->description	= $request ->txtDescription;
		$cate ->save();
		return redirect()->route('admin.category.list')->with([ 'flash_level'=>'success', 'flash_message'=>'Success !! Complete Add category']);	
	}

	public function getDelete($id){
		$parent = Category::where('parent_id',$id) -> count();
		if ( $parent == 0){
			$cate = Category::find($id);
			$cate ->delete($id);
			return  redirect() -> route('admin.category.list') -> with(['flash_level' => 'success','flash_message' => 'Success !! Complete']);
		}else{
			echo "<script type='text/javascript'>
                                    	alert (' Sorry ! You Can Not Delete This Category');
                                    	window.location ='";
                                    		echo route('admin.category.list');

                                    	  	echo "'
			</script>";
		}	
	}

	public function getEdit($id){
		$data = Category::findOrFail($id) -> toArray();
		$parent = Category::select('id','name','parent_id')->get() ->toArray();
		return view('admin.category.edit',compact('parent','data','id'));
	}

	public function postEdit(Request $request, $id){
		$this ->validate($request,
			["txtCateName" => "required"],
			["txtCateName.required" => "Please Enter Name Category 1"]
		);
		$cate = Category::find($id);
		$cate ->name		= $request ->txtCateName;
		$cate ->alias		= changeTitle($request ->txtCateName);
		$cate ->order		= $request ->txtOrder;
		$cate ->parent_id	= $request->sltParent;
		$cate ->keywords	= $request ->txtKeywords;
		$cate ->description	= $request ->txtDescription;
		$cate ->save();
		return redirect()->route('admin.category.list')->with([ 'flash_level'=>'success', 'flash_message'=>'Success !! Complete Edit category']);	
	}
}
