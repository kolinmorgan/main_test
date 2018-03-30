<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use DB;
use Mail;
use App\Mail\MailClass;

class IndexController extends Controller {

    public function execute(Request $request) {


        if ($request->isMethod('post')) {

            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute должно соотвецтвовать email адресу"
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'
                    ], $messages);

//            $data = $request->all();
//            Mail::send('site.email', array('key' => 'value'), function($message) {
//                $message->to('EmailId@hotmail.com', 'Sender Name')->subject('Welcome!');
//            });
            
            $name = $request->name;
            $email = $request->email;
            $text = $request->text;
            Mail::to('testandrej@mail.com')->send(new MailClass($name, $email, $text));





//            if($result) {
//                return redirect()->route('home')->with('status','Email is send');
//            }
        }



//GET
        $pages = Page::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $peoples = People::all();

        $tegs = DB::table('portfolios')->distinct()->pluck('filter');
//        dd($tegs);


        $menu = array();
        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu, $item);
        }

        $item = array('title' => 'Services', 'alias' => 'service');
        array_push($menu, $item);
        $item = array('title' => 'Portfolio', 'alias' => 'Portfolio');
        array_push($menu, $item);
        $item = array('title' => 'Team', 'alias' => 'team');
        array_push($menu, $item);
        $item = array('title' => 'Contact', 'alias' => 'contact');
        array_push($menu, $item);

        return view('site.index', array(
            'menu' => $menu,
            'pages' => $page,
            'services' => $services,
            'portfolios' => $portfolios,
            'peoples' => $peoples,
            'tags' => $tegs
        ));
    }

}
