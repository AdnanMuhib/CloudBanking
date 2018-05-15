@extends('layouts.dashboard')
@section('title','Generate Reports')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">

                        <h2>Generate Reports</h2>

                     <form action='/currencyReport' method="POST">
                     @csrf
                         <div class="form-group">
                        <label class="form-label">From Date</label>
                        <div class="controls">
                          <input type="date" class="form-control" name="from" required>
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="form-label">To Date</label>
                        <div class="controls">
                          <input type="date" class="form-control" name="to" required>
                        </div>
                      </div>

                      <div class="form-group pull-right">

                        <div class="controls">
                          <button class="btn btn-primary my-colorpicker-control" type="submit"> Generate Report </button>
                        </div>
                      </div>

                     </form>

        </div>
    </div>

</div>
@endsection
