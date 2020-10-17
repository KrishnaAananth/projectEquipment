@extends('layouts.equipment_provider_app')



@section('Title')

	Address Book - Profile - Equipment Provider

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
								<div class="box_title"><a style="width:auto; cursor: pointer;">Address Book</a></div>
								<div class="box_text">View & Manage My Address Book</div>
							</div>
						</div>
					</div>
				</div>
				</br>
                <div class="row">
					<div class="col-lg-12">
                        <div class="box align-items-center justify-content-start" style="height: Auto;">
                        
                            {!! Form::open(['action' => ['Resource_Controllers\AddressController@update', Auth::id()], 'method' => 'POST']) !!}
                            
                                <div class="container">
                                    
                                    <div class="form-group">
										<b>{{Form::label('a-no', 'House Number')}}</b>
										{{Form::text('a-no', $address->Address_No, ['placeholder' => 'Enter the House No'])}}
                                    </div>
                                    
                                    <div class="form-group">
										<b>{{Form::label('a-stad', 'Street Address')}}</b>
										{{Form::text('a-stad', $address->Street_Address, ['placeholder' => 'Enter the Street Address'])}}
                                    </div>
                                    
                                    <div class="form-group">
										<b>{{Form::label('a-district', 'District')}}</b>
										{{Form::text('a-district', $address->District, ['placeholder' => 'Enter the District Name'])}}
									</div>
									
									<div class="form-group">
										<b>{{Form::label('a-province', 'Province')}}</b>
										{{Form::text('a-province', $address->Province, ['placeholder' => 'Enter the Province Name'])}}
                                    </div>

                                    {!! Form::hidden('_method', 'PUT') !!}
                                    
                                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                                    <!--<button class="btn_login" type="submit" name="update">Update</button>--> 
                                
                                </div>

                            {!! Form::close() !!}                    

						</div>
					</div>
				</div>
			</div>
		</div>

@endsection