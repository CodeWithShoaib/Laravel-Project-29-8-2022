<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Index;
use App\Models\CFeedback;
use App\Models\News;
use App\Models\Showcase;
use App\Models\About;
use App\Models\Team;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Items;
use App\Models\Blog;
use App\Models\Contact;





class FrontendController extends Controller
{
    public function home(){
        $index=Index::find(1);
        $CFeedback=CFeedback::all();
        $Showcase=Showcase::all();
        $news=News::all();


        return view('Frontend.index',["index"=>$index,"CFeedback"=>$CFeedback,"news"=>$news,"showcase"=>$Showcase]);
    }
    public function about(){
        $About=About::find(1);
        $team=Team::all();
        return view('Frontend.about',["about"=>$About,"team"=>$team]);
    }
    // public function pages(){
    //     return view('Frontend.pages');
    // }
    public function blog(){
        $Blog=Blog::all();

        return view('Frontend.blog',["blog"=>$Blog]);
    }
    public function contact(){
        $contact=Contact::find(1);
        return view('Frontend.contact',["contact"=>$contact]);
    }
    public function portfolio(){
        $Portfolio=Portfolio::find(1);
        return view('Frontend.portfolio',["portfolio"=>$Portfolio]);
    }
    public function services(){
        $Service=Service::find(1);
        return view('Frontend.services',["service"=>$Service]);
    }
    public function shop(){
        $product=Product::find(1);
        $item=Items::all();
        return view('Frontend.shop',["product"=>$product,"item"=>$item]);
    }

    public function header(){
        $header=Header::find(1);
        return view('Frontend.layout.header');
    }
}
