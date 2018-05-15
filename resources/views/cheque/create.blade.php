@extends('layouts.dashboard')
@section('title','Cheque')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                     <form action='/cheque' method="POST">
                     @csrf
                        <div class="form-group">
                        <label class="form-label" >Amount</label>
                        <div class="controls">
                          <input type="number" class="form-control" name="amount" required>
                        </div>

                        <div class="form-group">
                        <label class="form-label" >ُPayee Name</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="payee_name" required>
                        </div>
                      </div>

                      <div class="form-group pull-right">

                        <div class="controls">
                          <button class="btn btn-primary my-colorpicker-control" type="submit"> Create New </button>
                        </div>
                      </div>

                     </form>

        </div>
    </div>

</div>
@endsection
