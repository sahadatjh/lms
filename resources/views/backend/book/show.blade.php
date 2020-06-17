@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Books</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Book Details</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card account-settings-box">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Subject Details</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('book.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Book</button></a>
                    </div>
                </div>
                <hr><hr>
                <div class="user-details-box">
                    <div class="item-content">
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody><tr>
                                    <td>Subject Name:</td>
                                        <td class="font-medium text-dark-medium">{{$book->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Subject Code:</td>
                                        <td class="font-medium text-dark-medium">{{$book->code}}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Writer/Author:</td>
                                        <td class="font-medium text-dark-medium">{{$book['authors']['name']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Cariculam:</td>
                                        <td class="font-medium text-dark-medium">{{$book['cariculams']['name']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Department:</td>
                                        <td class="font-medium text-dark-medium">{{$book['departments']['department_name']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Semester:</td>
                                        <td class="font-medium text-dark-medium">{{$book['semesters']['semester_name']}}</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Probidhan:</td>
                                        <td class="font-medium text-dark-medium">{{$book->probidhan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Theory(T):</td>
                                        <td class="font-medium text-dark-medium">{{$book->theory}}</td>
                                    </tr>
                                    <tr>
                                        <td>Practical(P):</td>
                                        <td class="font-medium text-dark-medium">{{$book->practical}}</td>
                                    </tr>
                                    <tr>
                                        <td>Credit(C):</td>
                                        <td class="font-medium text-dark-medium">{{$book->credit}}</td>
                                    </tr>
                                    <tr>
                                        <td>TC(Theory Continuous):</td>
                                        <td class="font-medium text-dark-medium">{{$book->tc}}</td>
                                    </tr>
                                    <tr>
                                        <td>TF(Practical Final):</td>
                                        <td class="font-medium text-dark-medium">{{$book->tf}}</td>
                                    </tr>
                                    <tr>
                                        <td>PC(Practical Continuous):</td>
                                        <td class="font-medium text-dark-medium">{{$book->pc}}</td>
                                    </tr>
                                    <tr>
                                        <td>TC(Practical Final):</td>
                                        <td class="font-medium text-dark-medium">{{$book->pf}}</td>
                                    </tr>
                                    <tr>
                                        <td>Printed Price:</td>
                                        <td class="font-medium text-dark-medium">{{$book->printed_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Purchase Price:</td>
                                        <td class="font-medium text-dark-medium">{{$book->purchase_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Created By:</td>
                                        <td class="font-medium text-dark-medium">{{$book['createdUser']['name']}}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Udated By:</td>
                                        <td class="font-medium text-dark-medium">{{$book['updatedUser']['name']}}</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Activation Status:</td>
                                        <td class="font-medium text-dark-medium">
                                            @if ($book->activation_status==1)
                                                {{_('Active Book')}}
                                            @elseif($book->activation_status==0)
                                             {{_('Inactive Book')}}
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection