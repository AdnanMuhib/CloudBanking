@extends('layouts.dashboard')
@section('title','Branches')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                        <a class="btn btn-primary pull-right" href="branch/create"> Add New </a>
                        <table class="table table-hover no-more-tables" style="background-color:white; padding: 5px;">
                        <h3>Branches</h3>

                        @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif

                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Manage</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($result as $key=>$r)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$r->name}}</td>
                            <td>{{$r->address}}</td>
                            <td>
                            <a class="btn btn-warning" href="branch/{{$r->id}}/edit"> Edit </a>

                            <form Method="POST" Action="/branch/{{$r->id}}" style="display:inline" >
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit"> Delete </button>
                            </form>
                            </td>

                          </tr>
                        @endforeach
                        </tbody>
                      </table>

        </div>
    </div>

</div>
@endsection
