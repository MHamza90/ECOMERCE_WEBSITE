<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Auth;


class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('front.pages.home');
    }

    public function about()
    {
        return view('front.pages.about');
    }

    public function activity()
    {
        return view('front.pages.activity');
    }
    public function spotlight()
    {
        $artists = User::where('type','artist')->where('status',1)->where('id','!=',auth()->id())->get();
        return view('front.pages.spotlight',compact('artists'));
    }

    public function vault()
    {
        return view('front.pages.vault');
    }

    public function singleBlog($id)
    {
        $products = Product::where('artist_id',$id)->where('artist_id','!=',auth()->id())->get();
        return view('front.pages.single_blog',compact('products'));
    }

    public function checkout()
    {

        if(auth()->user()->id && \Cart::getTotal())
        {
            return view('front.pages.checkout');

        }else{
            return redirect('spotlight');
        }

    }

    function searchArtist(Request $request){
        $name = $request->search;
        $artists = User::
        where('id','!=',auth()->id())
        ->where('type', 'artist')
        ->orwhere('artist_stage_name', 'like', "%$name%")
        // ->orwhere('first_name', 'like', "%$name%")
            // ->orWhere('first_name', 'like', "%$name%")
            // ->orWhere('last_name', 'like', "%$name%")
            ->get();

        return $artists;
    }

    function shop(){
        $products = Product::where('artist_id','!=',auth()->id())->get();
        return view('front.pages.shop',compact('products'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
