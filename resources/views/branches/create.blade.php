@extends('layouts.dashboard')
@section('title','Branches')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                     <form action='/branch' method="POST">
                     @csrf
                         <div class="form-group">
                        <label class="form-label" for = "name">Name</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label" >Address</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="address" required>
                        </div>
                      </div>

                      <div class="form-group pull-right">

                        <div class="controls">
                          <button class="btn btn-primary my-colorpicker-control" type="submit"> Add New </button>
                        </div>
                      </div>

                     </form>

        </div>
    </div>

</div>
@endsection
