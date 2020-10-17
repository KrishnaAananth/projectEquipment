@extends('layouts.equipment_provider_app')



@section('Title')

	Contact Information - Profile - Equipment Provider

@endsection



@section('Special_Style')

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/product.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/product_responsive.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">

@endsection



@section('Content')

	<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				
				</br>
				</br>

				<a href="/equipment_provider" class="btn btn-secondary" style="width:auto;">Back</a>

				</br>
				
				@include('equipment_provider.includes.messages')
				
				</br>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="box d-flex flex-row align-items-center justify-content-start" style="height:200px; padding:25px">
							<div class="box_content">
								<div class="box_title"><a style="width:auto; cursor: pointer;">Contact Information</a></div>
								<div class="box_text">Edit My Contact Information</div>
							</div>
						</div>
					</div>
				</div>
				
				</br>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="box align-items-center justify-content-start" style="height: Auto;">
                        
                        
							{!! Form::open(['action' => ['Resource_Controllers\ContactController@update', Auth::id()], 'method' => 'POST', 'files' => true]) !!}
                            
                                <div class="container">

									<div class="form-group">
										<b>{{Form::label('u-name', 'Name')}}</b>
										{{Form::text('u-name', $contact->Name, ['placeholder' => 'Enter the Name'])}}
									</div>

									<div class="form-group">
										<b>{{Form::label('u-uname', 'Username')}}</b>
										{{Form::text('u-uname', $contact->Username, ['placeholder' => 'Enter the Username'])}}
									</div>

									<div class="form-group">
											<b>{{Form::label('p-img', 'Profile Image')}}</b>
											<div class="input-group">
												<div class="custom-file">
													{{Form::label('profile-img', 'Choose Image for the Profile', ['class' => 'custom-file-label'])}}
													{!! Form::file('profile-img', ['class' => 'custom-file-input', 'style' => 'cursor:pointer;',  'accept' => 'image/*']) !!}
												</div>
											</div>
										</div>

									<div class="form-group">
										<b>{{Form::label('u-email', 'E-Mail')}}</b>
										{{Form::text('u-email', $contact->Email, ['placeholder' => 'Enter the E-Mail'])}}
									</div>

									<div class="form-group">
										<b>{{Form::label('u-pno', 'Phone No')}}</b>
										{{Form::text('u-pno', $contact->Phone_No, ['placeholder' => 'Enter the Phone No'])}}
									</div>

									{!! Form::hidden('_method', 'PUT') !!}

									{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                                    <!--<button class="btn_login">Update</button>-->
                                </div>
								
							{!! Form::close() !!}
                        
						</div>
					</div>
				</div>

				</br>
				</br>

				{!! Form::open(['action' => ['Resource_Controllers\EquipmentProviderController@update', Auth::id()], 'method' => 'PUT']) !!}
                            
				{!! Form::submit('Deactivate My Account', ['class' => 'btn btn-danger', 'style' => 'width:auto; cursor:pointer;']) !!}
				
				<br/>
			
				{!! Form::close() !!}

			</div>
		</div>

@endsection