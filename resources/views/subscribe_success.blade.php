@extends('layout.master')

@section('title', ($action == 'request' ? 'Thank you for Joining' : 'Thank you for Signing Up'))

@section('styles')
    <link rel="stylesheet" href="https://netlify.scdn4.secure.raxcdn.com/css/34571ca2ffb416eeb125ab4fc2850add8cf8fd04/share-button.min.css">
@endsection

@section('scripts')
    <script src="https://netlify.scdn4.secure.raxcdn.com/js/77c4c5f1c76a34f7e93cb137111674922c21e6a7/share-button.min.js"></script>
    <script src="{{ asset('/js/social.js') }}"></script>
@endsection

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
                <br>
                <div>Help us to spread our name out there by clicking the button below!</div>
    		</div>
    	</div>

        <div class="row" style="margin-top:110px;">
            <div class="text-center">
                
                <style>
                share-button:before  {
                    background-image: none !important;
                }
                share-button:after  {
                    background-image: none !important;
                }
                </style>

                <div style="width: 100%; height: 100%;">
                    <share-button class="btn-primary btn-lg"></share-button>
                </div> <br>
            </div>
        </div>
    	<div class="row">
			<div class="text-center">
				<a href="/">Back to Corozal Classifieds</a>
			</div>
		</div>
    </div>
@endsection