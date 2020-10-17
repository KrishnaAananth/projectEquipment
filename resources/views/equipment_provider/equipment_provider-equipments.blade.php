@extends('layouts.equipment_provider_app')



@section('Title')

	Equipments - Profile - Equipment Provider

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

				<center>
					<div class="tab">

						<button class="tab_link" onclick="openSignup(event, 'View_Equipments')" id="defaultOpen"><center>View Equipments</center></button>
						<button class="tab_link" onclick="openSignup(event, 'Add_Equipments')"><center>Add Equipments</center></button>
	
					</div>
				</center>

				@include('equipment_provider.includes.messages')				

				<div id="Add_Equipments" class="tab_content">

					</br>

					<div class="row">
						<div class="col-lg-12">
							<div class="box d-flex flex-row align-items-center justify-content-start" style="height:200px; padding:25px">
								<div class="box_content">
									<div class="box_title"><a style="width:auto; cursor: pointer;">Import Equipments</a></div>
									<div class="box_text">Add new Equipments</div>
								</div>
							</div>
						</div>
					</div>
					
					</br>
					
					<div class="row">
						<div class="col-lg-12">
							<div class="box align-items-center justify-content-start" style="height: Auto;">
								
								{!! Form::open(['action' => 'Resource_Controllers\EquipmentController@store', 'method' => 'POST', 'files' => true]) !!}
								
									<div class="container">
										
										<div class="form-group">
											<b>{{Form::label('e-name', 'Equipment Name')}}</b>
											{{Form::text('e-name', '', ['placeholder' => 'Enter the Equipment Name'])}}
										</div>

										<div class="form-group">
											<b>{{Form::label('e-available', 'Available Number')}}</b>
											{{Form::text('e-available', '', ['placeholder' => 'Enter the Available Number'])}}
                                        </div>
                                        
                                        <div class="form-group">
											<b>{{Form::label('e-renting', 'Renting Price Per Day')}}</b>
											{{Form::text('e-renting', '', ['placeholder' => 'Enter the Renting Price Per Day'])}}
										</div>
										
										<div class="form-group">
											<b>{{Form::label('e-img', 'Equipment Image')}}</b>
											<div class="input-group">
												<div class="custom-file">
													{{Form::label('equipment-img', 'Choose Image for Equipment', ['class' => 'custom-file-label'])}}
													{!! Form::file('equipment-img', ['class' => 'custom-file-input', 'style' => 'cursor:pointer;',  'accept' => 'image/*']) !!}
												</div>
											</div>
										</div>
										
										<br>
										
										{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

										<!--<button class="btn_login">Submit</button>-->
										
									</div>

								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>

				<div id="View_Equipments" class="tab_content">

					</br>
					</br>

					<table>
							
						<tr>
							<th>Equipments Name</th>
							<th>Available Number</th>
							<th>Renting Price Per Day</th>							
                            <th>Equipment Image</th>							
							<th>Edit</th>							
							<th>Delete</th>
						</tr>

						@foreach ($Equipments as $Equipment)

						<tr>
							<td>{{ $Equipment->Name }}<br/></td>
							<td>{{ $Equipment->Available_Number }}<br/></td>
							<td>{{ $Equipment->Renting_Price_Per_Day }}<br/></td>								
                            <td><img src="{{ $Equipment->Equipment_Image_Path }}" style="width:150px;height:150px"><br/></td>
                            <td><a href="/equipment/{{{ $Equipment->Equipment_ID }}}/edit" class="btn btn-secondary" style="width:auto;">Edit</a><br/></td>
                            {!! Form::open(['action' => ['Resource_Controllers\EquipmentController@destroy', $Equipment->Equipment_ID], 'method' => 'DELETE']) !!}
                            
                            <td>{!! Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'width:auto; cursor:pointer;']) !!}<br/></td>
                        
                            {!! Form::close() !!}
						</tr>

						@endforeach

						<tr>
							<td><br/></td>
							<td><br/></td>
							<td><br/></td>								
							<td><br/></td>
							<td><br/></td>								
							<td><br/></td>
						</tr>

					</table>

				</div>				
				
			</div>
		</div>

@endsection