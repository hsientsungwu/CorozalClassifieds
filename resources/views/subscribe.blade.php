@extends('layout.master')

@section('title', ($action == 'request' ? 'Join Group' : 'Sign Up Newsletter'))

@section('url', url()->current())

@section('styles')
	<link type="text/css" href="css/style.css" rel="stylesheet">
@endsection

@section('content')
	<header>
	    <div class="container header-content">
	    	<div class="row">
	    		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	    			<h1 class="text-center">
	    				@if ($action == 'request')
	    					Join Corozal Classifieds
	    				@else
	    					Weekly Newsletter Signup
	    				@endif
	    			</h1>
	    		</div>
	    	</div>
			<div class="row">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			    	{!! Form::open(['role' => 'form', 'method' => 'post']) !!}
						<h4 class="text-center">
							@if ($action == 'request')
								Request to join Corozal Classifieds Facebook Group
							@else 
								Sign up for Corozal Classifieds' Weekly newsletter
							@endif
						</h4>

						@include('errors.errors')

						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control input-lg', 'placeholder' => 'First Name', 'tabindex' => '1']) !!}
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									{!! Form::text('last_name', null, ['id' => 'last_name', 'class' => 'form-control input-lg', 'placeholder' => 'Last Name', 'tabindex' => '2']) !!}
								</div>
							</div>
						</div>

						@if ($action == 'request')
							<div class="form-group">
								{!! Form::text('facebook_name', null, ['id' => 'facebook_name', 'class' => 'form-control input-lg', 'placeholder' => 'Facebook Name', 'tabindex' => '3']) !!}
							</div>
						@endif

						<div class="form-group">
							{!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control input-lg', 'placeholder' => 'Email Address', 'tabindex' => '4']) !!}
						</div>

						<div class="form-group">
							{!! Form::select('district', [
								'Belize' => 'Belize',
								'Cayo' => 'Cayo',
								'Corozal' => 'Corozal',
								'Orange Walk' => 'Orange Walk',
								'San Pedro' => 'San Pedro',
								'Stann Creek' => 'Stann Creek',
								'Toledo' => 'Toledo',
								'Outside of Belize' => 'Outside of Belize',
							],
							null, ['id' => 'district', 'class' => 'form-control input-lg', 'tabindex' => '5', 'placeholder' => 'Select a District you live in ...']
							) !!}
						</div>

						@if ($action == 'request')
							<div class="row form-group">
								<div class="col-xs-4 col-sm-3 col-md-3">
									<span class="button-checkbox">
										<button type="button" class="btn" data-color="info" tabindex="5"> I would like to receive Corozal Classifieds weekly newsletter</button>
										{!! Form::checkbox('subscribe', '1', false, ['id' => 'subscribe', 'class' => 'hidden'] ) !!}
									</span>
								</div>
							</div>
						@endif

						<div class="row form-group">
							<div class="col-xs-12 col-sm-6 col-md-6">
								{!! Recaptcha::render() !!}
							</div>
						</div>
						
						<hr class="colorgraph">
						<div class="row form-group">
							{!! Form::hidden('action', $action) !!}

							<div class="col-xs-12 col-md-12"><input type="submit" value="{{ $action == "request" ? 'Join Group' : 'Sign Up' }}" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</header>
@endsection