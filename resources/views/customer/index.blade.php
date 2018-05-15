@extends('layouts.dashboard')
@section('title','Cheque')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                        <a class="btn btn-primary pull-right" href="customer/create"> New Customer </a>
                        <table class="table table-hover no-more-tables" style="background-color:white; padding: 5px;">
                        <h3>Customers</h3>

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>CNIC</th>
                            <th>DOB</th>
                            <th>Gender</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($result as $key=>$r)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$r->name}}</td>
                            <td>{{$r->cnic}}</td>
                            <td>{{$r->dob}}</td>
                            <td>{{$r->gender}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
        </div>
    </div>
</div>
@endsection
