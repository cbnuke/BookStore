<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Type;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'books'=> Book::all(),
        ];
        return view('books/index',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = [
            'types' => Type::all(),
        ];
        return view('books/create',$datas);
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
            'name' => 'required',
            'des' => '',
            'types_id' => 'required',
            'import_price' => 'required',
            'sell_price' => 'required',
            'point' => 'required',
            'img' => ''
        ]);
        $book = new Book($datas);
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = [
            'book' => Book::where('id',$id)->first(),            
            'types' => Type::all(),
        ];
        return view('books/show',$datas);
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
        $datas = $request->validate([
            'name' => 'required',
            'des' => '',
            'types_id' => 'required',
            'import_price' => 'required',
            'sell_price' => 'required',
            'point' => 'required',
            'img' => ''
        ]);
        $book = Book::where('id',$id)->first();
        $book->update($datas);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id',$id)->first();
        try {
            $book->delete();
          }
        catch (\Exception $e) {
             
        }
        return redirect()->back();
    }
}
