@extends('layouts.dashboard')
@section('title','Cheque')
@section('body')

<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">

                     @include('layouts.errors');
                     <form action='/draft' method="POST">
                     @csrf
                        <div class="form-group">
                        <label class="form-label" >Sender Name</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="sender_name" required>
                        </div>

                        <div class="form-group">
                        <label class="form-label" >Sender CNIC</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="sender_cnic" required>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="form-label" >Draft Amount</label>
                        <div class="controls">
                          <input type="number" class="form-control" name="draft_amount" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="form-label" >Expiry Date</label>
                        <div class="controls">
                          <input type="date" class="form-control" name="expiry_date" required>
                        </div>
                      </div>

                      <div class="form-group pull-right">

                        <div class="controls">
                          <button class="btn btn-primary my-colorpicker-control" type="submit"> Create  </button>
                        </div>
                      </div>

                     </form>

        </div>
    </div>

</div>
@endsection
