<?php

namespace App\Application\Controllers;



use App\Application\Model\Page;
use Illuminate\Http\Request;
use App\Application\Model\Team;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->model = $team;
        $this->middleware('auth')->except(['getPageBySlug' , 'welcome','Contact']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('website.home');
    }

    public function getPageBySlug($slug){
        $page = Page::where('slug' , $slug)->first();
        if($page){
            return view('website.page' , compact('page'));
        }
        return redirect('404');
    }

     public function welcome(){
       
      $teams = $this->model->get();
        return view('website.welcome' , compact('teams'));
    }


  public function Contact(Request $request)
  {
    

      $this->validate($request,[
          'name' => 'required',
          'email' => 'required|email|max:400',
          'message' => 'required',
      ]);

     /* $data=[
         'nom'=>$request->get('name'),
         'email'=>$request->get('email'),
         'msg'=>$request->get('message')
      ];

      Mail::send('website.emails.welcome',$data,function($message){  

         $message->to('Admin@gmail.com','Admin ')->subject('Resirvation');


      });
      return redirect('/');*/






        Mail::send('website.emails.contact',[
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'message' => $request->get('message')
        ],

        function($message){
              $message->from('Divdiv@gmail.com');
              $message->to('divcoding@gmail.com', 'Admin')->subject('msg de site');
          });
        $add = new \App\Application\Model\Contact;
        $add->name          = $request->input('name');
        $add->email     = $request->input('email');
        $add->message           = $request->input('message');
        $add->save();

        $response = [
            'status' => 'success',
            'msg' => "Message Envoyer",
        ];
      return response()->json([$response], 200);


  }
}
