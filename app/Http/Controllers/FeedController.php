<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log ;

class FeedController extends Controller
{
    public function index()
    {
        return view('pages.feed.index');
    }

    public function create()
    {
        return view('pages.feed.create');
    }

        public function update(Request $request,Feed $feed)
    
        {
            $validated_request= $request->validate([
               'title'=>'required | string | max:100',
              'description'=>'required | string | max:300',


            ]);
            $feed->update($validated_request);
            return redirect()->route('feeds');

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
