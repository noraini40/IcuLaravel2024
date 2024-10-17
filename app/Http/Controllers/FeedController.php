<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Feed;
use Illuminate\Auth\Events\Validated;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Log ;

class FeedController extends Controller
{
    public function index()
    {
      
        $feeds=Feed::paginate(5);
        return view('pages.feed.index',compact('feeds'));
        
    }

    public function create()
    {
        return view('pages.feed.create');
    }
    public function store(Request $request)
    
    {
        $validated_request= $request->validate([
           'title'=>'required | string | max:100',
          'description'=>'required | string | max:300',


        ]);
        //ORM 
        // add a user id to the $validated_request

        $validated_request['user_id']=1;

        Feed::create($validated_request);
        return redirect()->route('feeds')->with('success','feed created successfully');;
    
    }
        public function update(Request $request,Feed $feed)
    
        {
            $validated_request= $request->validate([
               'title'=>'required | string | max:100',
              'description'=>'required | string | max:300',


            ]);
            $user=FacadesAuth::user();
            $validated_request['user_id'] =$user->id;

            $feed->update($validated_request);
            return redirect()->route('feeds')->with('success','feed updated successfully');

        //  return view('');
       // $feed->update($this->validateRequest($request));
       // return redirect()->route('feeds'->with('sucess', 'feed update successfull'))
        }

        public function show(Feed $feed)
        {
        //dd ($feed);
        Log::debug("SHOW FEED",['feed'=>$feed]);
            return view('pages.feed.show', compact('feed'));

    
    

    }
    
}
