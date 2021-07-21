<?php

namespace App\Http\Controllers;

Use App\Models\Carousel;
Use App\Models\Product;
Use App\Models\Team;
Use App\Models\Market;
Use App\Models\Gambar;
Use Mail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $carousel   = Carousel::all();
        $product    = Product::all();
        $team    = Team::all();
        return view('user.home', compact('carousel','product','team') );
    }

    public function about(){
        $team = Team::all();
        return view('user.about', compact('team'));
    }

    public function contact(){
        return view('user.contact');
    }

    public function product(){
        $product = Product::all();
        return view('user.product', compact('product') );
    }

    public function market(){
        $market = Market::all();
        return view('user.market', compact('market'));
    }

    public function detail_product($id){
        $product = Product::find($id);
        $image = Gambar::where('product_id', $product->id)->get();
        return view('user.detailProduct', compact('product','image'));
    }

    public function send_email(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        //  Send mail to admin
        \Mail::send('user.contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('hariiskandarmuda@gmail.com', 'hari iskandar')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
