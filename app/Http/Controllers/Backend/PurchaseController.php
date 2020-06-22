<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Model\Purchase;
use App\Model\Publication;
use App\Model\Book;
use App\Model\Author;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase=Purchase::orderBy('id','DESC')->get();
        return view('backend.purchase.index',['purchases'=>$purchase]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        $data['books']=Book::where('activation_status',1)->get();
        $data['publications']=Publication::where('activation_status',1)->get();
        $data['authors']=Author::where('activation_status',1)->get();
        return view('backend.purchase.create',$data);
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
	        'invoice_number' => 'required|unique:purchases',
	        'book_id' => 'required|numeric',
	        'publication_id' => 'required|numeric',
	        'author_id' => 'required|numeric',
	        'priented_price' => 'required',
	        'total_payable' => 'required',
        ]);

        $purchase = new Purchase;
        $purchase->invoice_number = $request->invoice_number;
        $purchase->book_id = $request->book_id;
        $purchase->publication_id = $request->publication_id;
        $purchase->book_id = $request->book_id;
        $purchase->author_id = $request->author_id;
        $purchase->quantity = $request->quantity;
        $purchase->priented_price = $request->priented_price;
        $purchase->discount = $request->discount;
        $purchase->total_payable = $request->total_payable;
        $purchase->created_by = Auth::user()->id;
        $purchase->remarks = $request->remarks;
        $saved= $purchase->save();
        if ($saved) {
            return redirect()->route('purchase.create')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('purchase.create')->with('error','Error!!! Please Check???');
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
        $data=array();
        $data['invoice']=Purchase::find($id);
        $data['books']=Book::where('activation_status',1)->get();
        $data['publications']=Publication::where('activation_status',1)->get();
        $data['authors']=Author::where('activation_status',1)->get();
        return view('backend.purchase.edit',$data);
        
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
	        'invoice_number' => 'required',
	        'book_id' => 'required|numeric',
	        'publication_id' => 'required|numeric',
	        'author_id' => 'required|numeric',
	        'priented_price' => 'required',
	        'total_payable' => 'required',
        ]);

        $purchase =Purchase::find($id);
        $purchase->invoice_number = $request->invoice_number;
        $purchase->book_id = $request->book_id;
        $purchase->publication_id = $request->publication_id;
        $purchase->book_id = $request->book_id;
        $purchase->author_id = $request->author_id;
        $purchase->quantity = $request->quantity;
        $purchase->priented_price = $request->priented_price;
        $purchase->discount = $request->discount;
        $purchase->total_payable = $request->total_payable;
        $purchase->updated_by = Auth::user()->id;
        $purchase->remarks = $request->remarks;
        $saved= $purchase->save();
        if ($saved) {
            return redirect()->route('purchase.index')->with('success','data updated successfully!');
        } else {
            return redirect()->route('purchase.index')->with('error','Error!!! Please Check???');
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
        //
    }
}
