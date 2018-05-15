@extends('layouts.dashboard')
@section('title','Draft')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                        <a class="btn btn-primary pull-right" href="/draft/create"> Create New Draft </a>
                        <table class="table table-hover no-more-tables" style="background-color:white; padding: 5px;">
                        <h3>Draft</h3>

                        @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Sender Name</th>
                            <th>Draft Amount</th>
                            <th>Draft Date</th>
                            <th>Expiry Date</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($result as $key=>$r)
                           <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$r->sender_name}}</td>
                            <td>{{$r->draft_amount}}</td>
                            <td>{{date('d F, Y', strtotime($r->created_at))}}</td>
                            <td>{{date('d F, Y', strtotime($r->expiry_date))}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>

        </div>
    </div>

</div>
@endsection
