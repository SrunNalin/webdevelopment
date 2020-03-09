<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);
  
        return view('book.bindex',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.bcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'room_type' => 'required',
            'qauntity' => 'required',
            'adult' => 'required',
            'days' => '',
        ]);
        $book = new Book;
        $book->first_name = $request->first_name;
        $book->last_name = $request->last_name;
        $book->email = $request->email;
        $book->phone = $request->phone;
        $book->check_in = $request->check_in;
        $book->check_out = $request->check_out;
        $book->room_type= $request->room_type;
        $book->qaunity = $request->qauntity;
        $book->Adult = $request->adult;
        if($book->check_in != $book->check_out)
        {
            $book->days = date_diff( date_create($book->check_in),date_create($book->check_out))->format('%d');
        }
        else{
            $book->days = 0;
        }
        $book->save();
        return redirect('index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.bshow',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.bedit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'status'=>'required'
        ]);
  
        $book->update($request->all());
  
        return redirect()->route('book.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
  
        return redirect()->route('book.index')
                        ->with('success','Product deleted successfully');
    }
}
