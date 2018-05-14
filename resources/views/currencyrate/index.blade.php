@extends('layouts.dashboard')
@section('title','Currency Rate')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                                                <a class="btn btn-primary pull-right" href="currencyrate/create"> Add New </a>


                        <table class="table table-hover no-more-tables" style="background-color:white; padding: 5px;">
                        <h3>Currency Rate</h3>
                        @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>PKR</th>
                            <th>INR</th>
                            <th>EURO</th>
                            <th>POUND</th>
                            <th>DIRHAM</th>
                            <th>RIYAL</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($result as $key=>$r)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{date('d F, Y', strtotime($r->date))}}</td>
                            <td>{{$r->PKR}}</td>
                            <td>{{$r->INR}}</td>
                            <td>{{$r->EURO}}</td>
                            <td>{{$r->POUND}}</td>
                            <td>{{$r->DIRHAM}}</td>
                            <td>{{$r->RIYAL}}</td>


                          </tr>
                        @endforeach
                        </tbody>
                      </table>

        </div>
    </div>

</div>
@endsection
