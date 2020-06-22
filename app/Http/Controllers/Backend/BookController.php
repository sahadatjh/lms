<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\Book;
use App\Model\Cariculam;
use App\Model\Author;
use App\Model\Publication;
use App\Model\Department;
use App\Model\Semester;
use App\Model\Student;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=array();
        $data['books']=Book::all();
        return view('backend.book.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        $data['books']=Book::all();
        $data['cariculams']=Cariculam::where('activation_status',1)->get();
        $data['authors']=Author::where('activation_status',1)->get();
        $data['publications']=Publication::where('activation_status',1)->get();
        $data['departments']=Department::where('activation_status',1)->get();
        $data['semesters']=Semester::where('activation_status',1)->get();
        return view('backend.book.create',$data);
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
	        'code' => 'required|numeric|unique:books',
	        'name' => 'required|string|unique:books|max:200|min:4',
	        // 'author_id' => 'required|numeric',
	        // 'publication_id' => 'required|numeric',
	        // 'cariculam_id' => 'required|numeric',
	        // 'printed_price' => 'required|numeric',
        ]);
// dd($request);
        $book = new Book;
        $book->code = $request->code;
        $book->name = $request->name;
        $book->author_id = $request->author_id;
        $book->publication_id = $request->publication_id;
        $book->cariculam_id = $request->cariculam_id;
        $book->department_id = $request->department_id;
        $book->semester_id = $request->semester_id;
        $book->probidhan = $request->probidhan;
        $book->theory = $request->theory;
        $book->practical = $request->practical;
        $book->credit = $request->credit;
        $book->tc = $request->tc;
        $book->tf = $request->tf;
        $book->pc = $request->pc;
        $book->pf = $request->pf;
        $book->printed_price = $request->printed_price;
        $book->purchase_price = $request->purchase_price;
        $book->activation_status = $request->activation_status;
        $book->created_by = Auth::user()->id;
        $saved= $book->save();
        if ($saved) {
            return redirect()->route('book.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('book.index')->with('error','Error!!! Please Check???');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=Book::find($id);
        return view('backend.book.show',['book'=>$book]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=array();
        $data['book']=Book::find($id);
        $data['cariculams']=Cariculam::where('activation_status',1)->get();
        $data['authors']=Author::where('activation_status',1)->get();
        $data['publications']=Publication::where('activation_status',1)->get();
        $data['departments']=Department::where('activation_status',1)->get();
        $data['semesters']=Semester::where('activation_status',1)->get();
        return view('backend.book.edit',$data);
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
        $request->validate([
	        'code' => 'required|numeric',
	        'name' => 'required|string|max:200',
	        // 'author_id' => 'required|numeric',
	        // 'publication_id' => 'required|numeric',
	        // 'cariculam_id' => 'required|numeric',
	        // 'publication_id' => 'required|numeric',
	        // 'printed_price' => 'required|numeric',
        ]);
// dd($request);
        $book = Book::find($id);
        $book->code = $request->code;
        $book->name = $request->name;
        $book->author_id = $request->author_id;
        $book->publication_id = $request->publication_id;
        $book->cariculam_id = $request->cariculam_id;
        $book->department_id = $request->department_id;
        $book->semester_id = $request->semester_id;
        $book->probidhan = $request->probidhan;
        $book->theory = $request->theory;
        $book->practical = $request->practical;
        $book->credit = $request->credit;
        $book->tc = $request->tc;
        $book->tf = $request->tf;
        $book->pc = $request->pc;
        $book->pf = $request->pf;
        $book->printed_price = $request->printed_price;
        $book->purchase_price = $request->purchase_price;
        $book->activation_status = $request->activation_status;
        $book->updated_by = Auth::user()->id;
        $saved= $book->save();
        if ($saved) {
            return redirect()->route('book.index')->with('success','data updaded successfully!');
        } else {
            return redirect()->route('book.index')->with('error','Error!!! Please Check???');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id);
        $deleted=$book->delete();
        if ($deleted) {
            return redirect()->route('book.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('book.index')->with('error','Error!!! Please Check???');
        }
    }

    public function distribution(){
        $student=Student::find(2);
        return view('backend.book.distribution',['student'=>$student]);
    }
}
