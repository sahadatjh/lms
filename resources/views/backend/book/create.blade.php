@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Books</li>
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
                        <h3>New Books Information Add</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('book.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Books</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('book.store') }}" class="new-added-form">
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
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"placeholder="Ex. Sahadat Hossain"  autocomplete="name" autofocus>
                        </div> 
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="author_id">Author *</label>
                            <select name="author_id" id="author_id" class="select2 @error('author_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($authors as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="publication_id">Publication*</label>
                            <select name="publication_id" id="publication_id" class="select2 @error('publication_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($publications as $item)
                                    <option value="{{$item->id}}">{{$item->publication_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="cariculam_id">Cariculam*</label>
                            <select name="cariculam_id" id="cariculam_id" class="select2 @error('cariculam_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($cariculams as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="department_id">Department*</label>
                            <select name="department_id" id="department_id" class="select2 @error('department_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($departments as $item)
                                    <option value="{{$item->id}}">{{$item->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="semester_id">Semester *</label>
                            <select name="semester_id" id="semester_id" class="select2 @error('semester_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($semesters as $item)
                                    <option value="{{$item->id}}">{{$item->semester_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="code">Subject code *</label>
                            <input type="number" id="code" name="code"  placeholder="Ex. 66631" class="form-control  @error('code') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="probidhan">Probidhan </label>
                            <input type="number" id="probidhan" name="probidhan"  placeholder="Ex. 2016" class="form-control  @error('probidhan') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="theory">Theory </label>
                            <input type="number" id="theory" name="theory"  placeholder="Ex. 2" class="form-control  @error('theory') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="practical">Practical </label>
                            <input type="number" id="practical" name="practical"  placeholder="Ex. 3" class="form-control  @error('practical') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="credit">Credit </label>
                            <input type="number" id="credit" name="credit"  placeholder="Ex. 3" class="form-control  @error('credit') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="tc">TC </label>
                            <input type="number" id="tc" name="tc"  placeholder="Ex. 40" class="form-control  @error('tc') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="tf">TF </label>
                            <input type="number" id="tf" name="tf"  placeholder="Ex. 60" class="form-control  @error('tf') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="pc">PC </label>
                            <input type="number" id="pc" name="pc"  placeholder="Ex. 25" class="form-control  @error('pc') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="pf">PF </label>
                            <input type="number" id="pf" name="pf"  placeholder="Ex. 25" class="form-control  @error('pf') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="printed_price">Printed price </label>
                            <input type="number" id="printed_price" name="printed_price"  placeholder="Ex. 220" class="form-control  @error('printed_price') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="purchase_price">Purchase price </label>
                            <input type="number" id="purchase_price" name="purchase_price"  placeholder="Ex. 200" class="form-control  @error('purchase_price') is-invalid @enderror">
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
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