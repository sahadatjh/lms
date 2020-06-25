@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Purchase</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>All New Purchase</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('purchase.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Bills</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('purchase.store') }}" class="new-added-form">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-3 col-12 form-group">
                            <label for="invoice_number">Ivoice/Bill Number *</label>
                            {{-- @php  $invoice_number=Str::random(7); @endphp --}}
                            <input id="invoice_number" type="text" name="invoice_number" class="form-control @error('invoice_number') is-invalid @enderror" placeholder="Ex. 20200625"  value="{{ old('invoice_number')}}"  >
                        </div>
                        <div class="col-xl-3 col-12 form-group">
                            <label for="date">Purchase Date *</label>
                            <input type="text" name="date" id="date" placeholder="yyyy-mm-dd" class="form-control air-datepicker @error('date') is-invalid @enderror " data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <label for="book_id">Subject Name *</label>
                            <select name="book_id" id="book_id" class="select2 @error('book_id') is-invalid @enderror" >
                                <option value="">Please Select*</option>
                                @foreach ($books as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <label for="publication_id">Publications Name *</label>
                            <select name="publication_id" id="publication_id" class="select2 @error('publication_id') is-invalid @enderror" >
                                <option value="">Please Select*</option>
                                @foreach ($publications as $item)
                                    <option value="{{$item->id}}">{{$item->publication_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-12 form-group">
                            <label for="author_id">Author Name *</label>
                            <select name="author_id" id="author_id" class="select2 @error('author_id') is-invalid @enderror" >
                                <option value="">Please Select*</option>
                                @foreach ($authors as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-lg-2 col-12 form-group">
                            <label for="quantity">Quantity *</label>
                            <input id="quantity" type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror"  value="{{ old('quantity') }}"placeholder="Ex. 30"  autocomplete="quantity" >
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="priented_price">Unit Price</label>
                            <input id="priented_price" type="number" name="priented_price" class="form-control @error('priented_price') is-invalid @enderror"  value="{{ old('priented_price') }}"placeholder="Ex. 220"  autocomplete="priented_price" >
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="discount">Discount %</label>
                            <input id="discount" type="number" name="discount" class="form-control @error('discount') is-invalid @enderror"  value="{{ old('discount') }}"placeholder="Ex. 25"  autocomplete="discount" > 
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="toral_price">Total Price</label>
                            <input id="toral_price" type="number" name="total_payable" class="form-control @error('toral_price') is-invalid @enderror"  value="{{ old('toral_price') }}"placeholder="Ex. 4950"  autocomplete="toral_price" > 
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="remarks">Remarks *</label>
                            <textarea id="remarks" name="remarks" class="textarea form-control @error('remarks') is-invalid @enderror" cols="10" rows="4"></textarea>
                        </div> --}}
                        <div class="col-2 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Add</button>
                        </div>
                    </div>
                </form>
                <hr><hr><br>
                <table class="table display text-nowrap">
                    <thead>
                        <th>Sl</th>
                        <th>Bill Number</th>
                        <th>Subject Name</th>
                        <th>Quantity</th>
                        <th>Unite Price</th>
                        <th>Discount</th>
                        <th>Payable</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <td>01</td>
                        <td>20200625</td>
                        <td>Programming Essentials</td>
                        <td><input type="number" name="quantity" value="1" class="form-control" min="1"></td>
                        <td><input type="number" name="unite_price" class="form-control" min="1"></td>
                        <td><input type="number" name="discount" class="form-control" min="1"></td>
                        <td><input type="number" name="payable" class="form-control" min="1"></td>
                        <td><input type="text" name="remarks" class="form-control" min="1"></td>
                        <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection