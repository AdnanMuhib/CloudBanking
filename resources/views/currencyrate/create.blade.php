@extends('layouts.dashboard')
@section('title','Currency Rate')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                     <form action='/currencyrate' method="POST">
                     @csrf
                         <div class="form-group">
                        <label class="form-label" for = "name">One Dollar Equals (value in PKR)</label>
                        <div class="controls">
                          <input type="number" class="form-control" name="pkr" required>
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
