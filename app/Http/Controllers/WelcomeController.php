<?php namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$product  = DB::table('products')->select('id','name','image','price','alias') ->orderBy('id','DESC')->skip(0)->take(4)->get();
		$new = DB::table('products')->select('id','name','image','price','alias') ->orderBy('id','DESC')->skip(4)->take(8)->get();
		return view('user.pages.home',compact('product','new'));
	}

	public function loaisanpham($id){
		$product_cate = DB::table('products') ->select('id','name','image','price','alias','cate_id') ->where('cate_id',$id) ->paginate(2);
		$cate = DB::table('categories') ->select('parent_id') ->where('id', $product_cate[0] ->cate_id) ->first();
		$menu_cate = DB::table('categories') ->select('id','name','alias') ->where('parent_id',$cate->parent_id) ->get();
		$name_cate = DB::table('categories') ->select('name') ->where('id',$id)->first();
		$lasted_product = DB::table('products') ->select('id','name','image','price','alias') ->orderBy('id','DESC') ->take(3)->get();
		return view('user.pages.cate',compact('product_cate','menu_cate','lasted_product','name_cate'));
	}

	public function chitietsanpham($id){
		$product_detail = DB::table('products') ->where('id',$id) ->first();
		$image = DB::table('product_images') ->select('id','image')->where('product_id',$product_detail ->id)->get();
		$product_cate =DB::table('products')->where('cate_id',$product_detail ->cate_id) ->where('id','<>',$id)->take(4)->get();
		return view('user.pages.detail',compact('product_detail','image','product_cate'));
	}
}
