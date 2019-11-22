<section class="container-fluid ">
		<div class="footer_img" >
	
			<div class="row ftrow" >
				<div class="col-lg-2 col-md-2 col-sm-1 col-1  "></div>
				<div class="col-lg-8 col-md-8 col-sm-10 col-10 ">
					<div class="row " style="border-bottom: 1px solid red;">
						<div class="col-lg-2 col-md-4 col-sm-4 col-4  text-white">
							@foreach($showcate as $singlecate)
							@if($singlecate->id=='1')
							<h6>{{$singlecate->name}} </h6>

								@endif
									@endforeach
									<p class="fnt">@foreach($showbike as $singlebike)
									@if($singlebike->category_id=='1')

									{{$singlebike->Name}}<br>
									@endif
										@endforeach</p>
						
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
								@foreach($showcate as $singlecate)
							@if($singlecate->id=='3')
							<h6>{{$singlecate->name}} </h6>

								@endif
									@endforeach							
									<p class="fnt">@foreach($showbike->take(7) as $singlebike)
									@if($singlebike->category_id=='3')

									{{$singlebike->Name}}<br>
									@endif
										@endforeach</p>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
							@foreach($showcate->take(5) as $singlecate)
							@if($singlecate->id=='6')
							<h6>{{$singlecate->name}} </h6>

								@endif
									@endforeach
								<p class="fnt">@foreach($showbike as $singlebike)
									@if($singlebike->category_id=='6')

									{{$singlebike->Name}}<br>
									@endif
										@endforeach</p>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6 text-white">
							@foreach($showconf as $singleconf)
							@if($singleconf->key=='CONTACT')
							<h6 class="hfnt">{{$singleconf->key}}</h6>
							<p class="fnt">{{$singleconf->value}}
							</p>
							@endif
							@endforeach
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-6 text-white">
								@foreach($showconf as $singleconf)
							@if($singleconf->key=='OPENINGSTIJDEN')
							<h6 class="hfnt">{{$singleconf->key}}</h6>
							<p class="fnt">{{$singleconf->value}}
							</p>
								@endif
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-1 col-1"></div>
			</div>
			
		</div>

	</section>





</body>
</html>




