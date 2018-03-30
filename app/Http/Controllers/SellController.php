<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Member;
use App\Book;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'sells'=> Sell::all(),
        ];
        return view('sells/index',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'members' => Member::all(),
            'books' => Book::all(),
        ];
        return view('sells/create',$datas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $request->validate([
            'members_id' => 'required',
            'books_id' => 'required',
            'discount' => 'required'
        ]);
        $sell = new Sell($datas);
        $sell->save();
        //Update member point
        $book = Book::where('id',$datas['books_id'])->first();
        $member = Member::where('id',$datas['members_id'])->first();
        $member->point  += $book->point;
        $member->save();
        return redirect()->route('sells.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sell = Sell::where('id',$id)->first();

        //Update member point 1
        $book = Book::where('id',$sell->books_id)->first();
        $member = Member::where('id',$sell->members_id)->first();
        
        try {
            $sell->delete();
            //Update member point 2
            $member->point  -= $book->point;
            $member->save();
          }
        catch (\Exception $e) {
             
        }
        return redirect()->back();
    }
}
