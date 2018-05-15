@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>

                                    <div class="controls">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

                                    <div class="controls">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>

                                    <div class="controls">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                                    <div class="controls">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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

                             <div class="form-group">
                               <label class="form-label">Nearby Branch</label>
                               <div class="controls">
                                 <select name="branch_id" required class="form-control">
                                   <option value="">Choose Branch </option>
                                   @foreach($branches as $branch)
                                   <option value="{{$branch->id}}">{{$branch->name}}</option>
                                   @endforeach
                                 </select>
                               </div>
                            </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" style="float: right;">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
