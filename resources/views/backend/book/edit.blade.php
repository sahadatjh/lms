@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Edit Book</li>
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
                        <h3>Update Books Information</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('book.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Books</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('book.update',$book->id) }}" class="new-added-form">
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
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="name">Book Name *</label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ $book->name }}" autofocus>
                        </div> 
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="author_id">Author *</label>
                            <select name="author_id" id="author_id" class="select2 @error('author_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($authors as $item)
                                    <option value="{{$item->id}}" {{($item->id==$book->author_id)?'selected':''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="publication_id">Publication*</label>
                            <select name="publication_id" id="publication_id" class="select2 @error('publication_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($publications as $item)
                                    <option value="{{$item->id}}" {{($item->id==$book->publication_id)?'selected':''}}>{{$item->publication_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="cariculam_id">Cariculam*</label>
                            <select name="cariculam_id" id="cariculam_id" class="select2 @error('cariculam_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($cariculams as $item)
                                    <option value="{{$item->id}}" {{($item->id==$book->cariculam_id)?'selected':''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="department_id">Department*</label>
                            <select name="department_id" id="department_id" class="select2 @error('department_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($departments as $item)
                                    <option value="{{$item->id}}" {{($item->id==$book->department_id)?'selected':''}}>{{$item->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="semester_id">Semester *</label>
                            <select name="semester_id" id="semester_id" class="select2 @error('semester_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($semesters as $item)
                                    <option value="{{$item->id}}" {{($item->id==$book->semester_id)?'selected':''}}>{{$item->semester_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="code">Subject code *</label>
                            <input type="number" id="code" name="code"  value="{{$book->code}}" class="form-control  @error('code') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="probidhan">Probidhan </label>
                            <input type="number" id="probidhan" name="probidhan" value="{{$book->probidhan}}" class="form-control  @error('probidhan') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="theory">Theory </label>
                            <input type="number" id="theory" name="theory"  value="{{$book->theory}}" class="form-control  @error('theory') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="practical">Practical </label>
                            <input type="number" id="practical" name="practical"  value="{{$book->practical}}" class="form-control  @error('practical') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="credit">Credit </label>
                            <input type="number" id="credit" name="credit"  value="{{$book->credit}}" class="form-control  @error('credit') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="tc">TC </label>
                            <input type="number" id="tc" name="tc" value="{{$book->tc}}" class="form-control  @error('tc') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="tf">TF </label>
                            <input type="number" id="tf" name="tf"  value="{{$book->tf}}" class="form-control  @error('tf') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="pc">PC </label>
                            <input type="number" id="pc" name="pc" value="{{$book->pc}}" class="form-control  @error('pc') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="pf">PF </label>
                            <input type="number" id="pf" name="pf" value="{{$book->pf}}" class="form-control  @error('pf') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="printed_price">Printed price </label>
                            <input type="number" id="printed_price" name="printed_price"  value="{{$book->printed_price}}" class="form-control  @error('printed_price') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="purchase_price">Purchase price </label>
                            <input type="number" id="purchase_price" name="purchase_price" value="{{$book->purchase_price}}" class="form-control  @error('purchase_price') is-invalid @enderror">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1" {{(1==$book->activation_status)?'selected':''}}>Active</option>
                                <option value="0" {{(1==$book->activation_status)?'selected':''}}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection