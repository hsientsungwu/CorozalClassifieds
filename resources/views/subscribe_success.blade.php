@extends('layout.master')

@section('title', ($action == 'request' ? 'Thank you for Joining' : 'Thank you for Signing Up'))

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    			<h1 class="text-center">Corozal Classifieds</h1>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    			<div>
    				@if ($action == 'request')
    					Thank you for requesting to join Corozal Classifieds Facebook Group. We will review your request as soon as possible. Thank you for your patience. 
    				@else 
    					Thank you for signing up with Corozal Classifieds Weekly Newsletter.
    				@endif
    			</div>
    		</div>
    	</div>
    	<div class="row">
			<div class="text-center">
				<a href="/">Back to Corozal Classifieds</a>
			</div>
		</div>
    </div>
@endsection