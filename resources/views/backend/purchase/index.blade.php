@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Purchases</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Bills</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Bills</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('purchase.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add New</button></a>
            </div>
        </div>
        <hr><hr>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">SL</label>
                            </div>
                        </th>
                        <th>Invoice Number</th>
                        <th>Subject Name</th>
                        <th>Publication</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Payable</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td>{{$item->invoice_number}}</td>
                        <td>{{$item->book->name}}</td>
                        <td>{{$item->publication->publication_name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->priented_price}}</td>
                        <td>{{$item->discount}}</td>
                        <td>{{$item->total_payable}}</td>
                        <td>{{$item->createdUser->name}}</td>
                        <td>
                            @if ($item->updatedUser)
                                {{$item->updatedUser->name}}
                            @endif
                        </td>
                        <td>{{$item->remarks}}</td>
                        <td>
                            <a href="{{route('purchase.edit',$item->id)}}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Student Table Area End Here -->
@endsection