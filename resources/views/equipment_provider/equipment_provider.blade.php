@extends('layouts.equipment_provider_app')



@section('Title')

	Profile - Equipment Provider

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
				<div class="row">
					<div class="col-lg-6">
						<div class="box d-flex flex-row align-items-center justify-content-start" style="height:200px; padding:25px">
							<div class="box_content">
								<div class="box_title"><a href="/equipment_provider-profile-contact-information/{{{Auth::id()}}}" style="width:auto; cursor: pointer;">Contact Information</a></div>
								<div class="box_text">Edit My Contact Information</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 box_col">
						<div class="box d-flex flex-row align-items-center justify-content-start" style="height:200px; padding:25px">
							<div class="box_content">
								<div class="box_title"><a href="/equipment_provider-profile-address-book/{{{Auth::id()}}}" style="width:auto; cursor: pointer;">Address Book</a></div>
								<div class="box_text">View & Manage My Address Book</div>
							</div>
						</div>
					</div>
				</div>
				</br>
				</br>
				<div class="row">
                    <div class="col-lg-3">
                        
					</div>
					<div class="col-lg-6">
						<div class="box d-flex flex-row align-items-center justify-content-start" style="height:200px; padding:25px">
							<div class="box_content">
								<div class="box_title"><a href="/equipment_provider-equipments/{{{Auth::id()}}}" style="width:auto; cursor: pointer;">My Equipments</a></div>
								<div class="box_text">View My Equipments and Their Details</div>
							</div>
						</div>
                    </div>
                    <div class="col-lg-3">
                        
					</div>
				</div>
			</div>
		</div>

@endsection