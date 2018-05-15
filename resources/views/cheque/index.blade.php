@extends('layouts.dashboard')
@section('title','Cheque')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                        <a class="btn btn-primary pull-right" href="cheque/create"> Issue New Cheque </a>
                        <table class="table table-hover no-more-tables" style="background-color:white; padding: 5px;">
                        <h3>Cheque</h3>

                        @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Payee Name</th>
                            <th>Amount</th>
                            <th>Amount in Words</th>
                            <th>Date</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($result as $key=>$r)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$r->payee_name}}</td>
                            <td>{{$r->amount}}</td>
                            <td>{{$r->amount_in_words}}</td>
                            <td>{{date('d F, Y', strtotime($r->created_at))}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>

        </div>
    </div>

</div>
@endsection
