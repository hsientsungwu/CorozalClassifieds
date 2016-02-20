@extends('layout.master')

@section('title', ($action == 'request' ? 'Join Group' : 'Sign Up Newsletter'))

@section('styles')
	<style>
		/* Credit to bootsnipp.com for the css for the color graph */
		.colorgraph {
		  height: 5px;
		  border-top: 0;
		  background: #c4e17f;
		  border-radius: 5px;
		  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
		}
	</style>
@endsection

@section('scripts')
	<script>
		$(function () {
		    $('.button-checkbox').each(function () {

		        // Settings
		        var $widget = $(this),
		            $button = $widget.find('button'),
		            $checkbox = $widget.find('input:checkbox'),
		            color = $button.data('color'),
		            settings = {
		                on: {
		                    icon: 'glyphicon glyphicon-check'
		                },
		                off: {
		                    icon: 'glyphicon glyphicon-unchecked'
		                }
		            };

		        // Event Handlers
		        $button.on('click', function () {
		            $checkbox.prop('checked', !$checkbox.is(':checked'));
		            $checkbox.triggerHandler('change');
		            updateDisplay();
		        });
		        $checkbox.on('change', function () {
		            updateDisplay();
		        });

		        // Actions
		        function updateDisplay() {
		            var isChecked = $checkbox.is(':checked');

		            // Set the button's state
		            $button.data('state', (isChecked) ? "on" : "off");

		            // Set the button's icon
		            $button.find('.state-icon')
		                .removeClass()
		                .addClass('state-icon ' + settings[$button.data('state')].icon);

		            // Update the button's color
		            if (isChecked) {
		                $button
		                    .removeClass('btn-default')
		                    .addClass('btn-' + color + ' active');
		            }
		            else {
		                $button
		                    .removeClass('btn-' + color + ' active')
		                    .addClass('btn-default');
		            }
		        }

		        // Initialization
		        function init() {

		            updateDisplay();

		            // Inject the icon if applicable
		            if ($button.find('.state-icon').length == 0) {
		                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
		            }
		        }
		        init();
		    });
		});
	</script>
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
				<form role="form" method="post">
					<h2 class="text-center"><small>
						@if ($action == 'request')
							Request to join Corozal Classifieds Facebook Group
						@else 
							Sign up for Corozal Classifieds' Weekly newsletter
						@endif
					</small></h2>

					@include('errors.errors')

					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
		                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="">
							</div>
						</div>
					</div>

					@if ($action == 'request')
						<div class="form-group">
							<input type="text" name="facebook_name" id="facebook_name" class="form-control input-lg" placeholder="Facebook Name (Case Sensitive)" tabindex="3" value="">
						</div>
					@endif

					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="">
					</div>

					<div class="form-group">
						<select id="district" name="district" class="form-control input-lg" tabindex="5">
							<option value="">District you Reside</option>
							<option value="Belize">Belize</option>
							<option value="Cayo">Cayo</option>
							<option value="Corozal">Corozal</option>
							<option value="Orange Walk">Orange Walk</option>
							<option value="San Pedro">San Pedro</option>
							<option value="Stann Creek">Stann Creek</option>
							<option value="Toledo">Toledo</option>
							<option value="Outside of Belize">Outside of Belize</option>
						</select>
					</div>

					@if ($action == 'request')
						<div class="row form-group">
							<div class="col-xs-4 col-sm-3 col-md-3">
								<span class="button-checkbox">
									<button type="button" class="btn" data-color="info" tabindex="5"> I would like to receive Corozal Classifieds weekly newsletter</button>
			                        <input type="checkbox" name="subscribe" id="subscribe" class="hidden" value="1">
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
						{{ csrf_field() }}
						<input type="hidden" name="action" value="{{ $action }}" >
						<div class="col-xs-12 col-md-12"><input type="submit" value="{{ $action == "request" ? 'Join Group' : 'Sign Up' }}" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					</div>

					<div class="row">
						<div class="text-center">
							<a href="/">Back to Corozal Classifieds</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection