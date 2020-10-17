@extends('layouts.guest_app')



@section('Title')

	Equipments & Equipment Providers

@endsection



@section('Special_Style')

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main_styles.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/login.css')}}">

@endsection



@section('Content')

			<!-- Equipments -->
			
			<br/>
			<br/>
			
			<div class="products">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section_title text-center">Equipments</div>
						</div>
					</div>

					<br/>
					<br/>

					<div class="row products_row">
						
						@foreach($Equipment_Selected as $Equipment)

							<!-- Product -->
							<div class="col-xl-4 col-md-6 grid-item new">
								<div class="product">
									<div class="product_image"><img src="{{ $Equipment->Equipment_Image_Path }}" alt="" style="height:400px;width:400px"></div>
									<div class="product_content">
										<div class="product_info d-flex flex-row align-items-start justify-content-start">
											<div>
												<div class="product_name"><a href="/equipment/{{ $Equipment->Name}}">{{ $Equipment->Name }}</a></div>
												<div class="product_name">{{ $Equipment->Available_Number }}</div>
												<div class="product_name">Rs. {{ $Equipment->Renting_Price_Per_Day }}</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						@endforeach				
						
					</div>
				</div>
			</div>

			<!-- Equipment Providers -->
			
			<br/>
			<br/>
			
			<div class="products">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section_title text-center">Equipment Providers</div>
						</div>
					</div>

					<br/>
					<br/>

					<div class="row products_row">
						
						@foreach($Equipment_Provider_Selected as $Equipment_Provider)

							<!-- Product -->
							<div class="col-xl-4 col-md-6 grid-item new">
								<div class="product">
									<div class="product_image"><img src="{{ $Equipment_Provider->Profile_Image_Path }}" alt="" style="height:400px;width:400px"></div>
									<div class="product_content">
										<div class="product_info d-flex flex-row align-items-start justify-content-start">
											<div>
												<div class="product_name"><a href="/equipment/{{ $Equipment_Provider->Name}}">{{ $Equipment_Provider->Name }}</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>

						@endforeach				
						
					</div>
				</div>
			</div>

@endsection