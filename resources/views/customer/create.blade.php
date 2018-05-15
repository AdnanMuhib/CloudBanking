@extends('layouts.dashboard')
@section('title','Cheque')
@section('body')
<div class="container">

    <div class="row">

        <div class="col-md-offset-2 col-md-7 col-sm-8 col-xs-8">
                     <form action='/customer' method="POST">
                     @csrf
                     <div class="form-group">
                       <label class="form-label">User ID</label>
                       <div class="controls">
                         <select name="user_id" required class="form-control">
                           <option value="">Choose User </option>
                           @foreach($users as $user)
                           <option value="{{$user->id}}">{{$user->email}}</option>
                           @endforeach
                         </select>
                       </div>
                     </div>
                        <div class="form-group">
                        <label class="form-label" >Name</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="name" required>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="form-label" >Date of birth</label>
                        <div class="controls">
                          <input type="date" class="form-control" name="dob" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="form-label" >Address</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="address" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label" >CNIC</label>
                        <div class="controls">
                          <input type="text" class="form-control" name="cnic" required minlength="13" maxlength="13">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label" >Gender</label>
                        <div class="controls">
                          <select name="gender" required class="form-control">
                            <option value="">Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
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
