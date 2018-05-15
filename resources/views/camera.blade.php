@extends('layouts.dashboard')
@section('title','Fingerprint')

@section('headerfiles')
	<script type="text/javascript"
	      src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>
	<script type="text/javascript"
	      src="{{asset('camerafiles/jpeg_camera_with_dependencies.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('camerafiles/demo.js')}}"></script>
	<link href="{{asset('camerafiles/demo.css')}}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('body')
<p>Scan Your Fingerprint</p>
    <!-- <div id="camera_info"></div> -->
    <!-- <div id="stream_stats"></div> -->
<div class="row">
	<div class="col-md-4" style="border:20px solid white;">
		<div id="camera">
		      <div class="placeholder">
		      </div>
	    </div>
	</div>
	<div class="col-md-8">
		<div id="snapshots"></div>
		<button id="discard_snapshot" class="btn btn-danger">Discard Fingerprint</button>
    	<button id="upload_snapshot" class="btn btn-success">Save Fingerprint</button><br>
    	<input type="text" id="api_url" placeholder="https://example.com/upload" value="http://localhost:8000/uploads"><br>

	    <img src="{{asset('camerafiles/loader.gif')}}" id="loader">
	    <div id="upload_status"></div>
	    <div id="upload_result"></div>
	</div>
</div>
    
    
    <button id="take_snapshots" class="btn btn-success">Take snapshots</button>
    <button id="show_stream" class="btn btn-primary">Show stream</button><br>

    

    
@endsection