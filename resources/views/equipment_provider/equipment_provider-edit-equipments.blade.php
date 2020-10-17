@extends('layouts.equipment_provider_app')



@section('Title')

	Edit Equipments - Profile - Equipment Provider

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
				</br>
                </br>
                
                @include('equipment_provider.includes.messages')
                
                </br>
				<div class="row">
					<div class="col-lg-12">
						<div class="box d-flex flex-row align-items-center justify-content-start" style="height:200px; padding:25px">
							<div class="box_content">
								<div class="box_title"><a style="width:auto; cursor: pointer;">Edit Equipments</a></div>
								<div class="box_text">Edit the details of Equipments</div>
							</div>
						</div>
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-lg-12">
						<div class="box align-items-center justify-content-start" style="height: Auto;">
							
							</br>
							</br>

							
                            {!! Form::open(['action' => ['Resource_Controllers\EquipmentController@update', $equipment->Equipment_ID], 'method' => 'PUT']) !!}

                                
                                <div class="container">

                                    <div class="form-group">
                                        <b>{!! Form::label('name', 'Equipment Name') !!}</b>
                                        {!! Form::text('name', $equipment->Name, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <b>{!! Form::label('available_No', 'Available Number') !!}</b>
                                        {!! Form::text('available_No', $equipment->Available_Number, ['class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <b>{!! Form::label('renting', 'Renting Price Per Day') !!}</b>
                                        {!! Form::text('renting', $equipment->Renting_Price_Per_Day, ['class' => 'form-control']) !!}
                                    </div>

                                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                                                                                            
                                    <!--<button type="submit" style="width:640px" name="submit">Submit</button>-->
                                
                                </div>

                            {!! Form::close() !!}						
							
							</br>
							</br>

						</div>
					</div>
				</div>
			</div>
		</div>	

@endsection