<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum;

class LIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        //return 'Show the paragraphs';
        return view('LI.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postIndex(Request $request)
    {
        //
      $this->validate($request, [
          'users' => 'required|integer|min:1|max:100'
          ]);
          $data = $request->all();
          $count = $data['para'];
        //dd($request->all());
        $generator = new LoremIpsum\Generator();
        $text_data = $generator->getParagraphs($count);
        return view('LI.postindex')->with(['data' => $data, 'paragraphs' => $text_data]);
    }


}
