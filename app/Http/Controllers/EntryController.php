<?php

namespace App\Http\Controllers;

use App\Http\Requests\entryRequest;
use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $entris = Entry::where('user_id',auth()->id())->get();
        return view('entries.index',compact('entris'));
    }

    public function show(Entry $entryBySlug)
    {
       return view('entries.show',[
        'entri'=>$entryBySlug
       ]) ;
    }

    public function create()
    {
    return view('entries.create');
    }

    public function store(entryRequest $request)
    {

          Entry::create($request->validated());

          return redirect()->route('myentryindex')->with('status','The entry has been published successfully');

    }

    public function edit(Entry $entri)
    {
      $this->authorize('update',$entri);
      return view('entries.edit',['entri'=>$entri]);
    }

    public function update(Entry $entri,entryRequest $request)
    {
         $this->authorize('update',$entri);
         $entri->update($request->validated());
         return redirect()->route('myentryindex')->with('status','publish has been updated sucessfully');
    }

}
