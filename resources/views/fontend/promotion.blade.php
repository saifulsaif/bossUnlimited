@extends('fontend.index')
@include('fontend.header')
@section('content')
<section>
		<div class="block no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inner-header">
							<h2>Columns Listing</h2>
							<ul class="breadcrumbs">
								<li><a href="#" title="">Home</a></li>
								<li><a href="#" title="">Listing</a></li>
								<li><a href="#" title="">Business</a></li>
								<li>IT & Computers</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block gray ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
						<h3 class="mini-title">Grid Listing</h3>
						<div class="filter-bar">
							<span>11 Results Found</span>
							<div class="which-style">
								<a href="#" title="" class="grid-style active"><i class="la la-th-large"></i></a>
								<a href="#" title="" class="list-style"><i class="la la-th-list"></i></a>
							</div>
							<div class="open-filter-btns">
								<span class="close-filter"><i class="la la-close"></i> Close</span>
								<span class="open-filter"><i class="la la-filter"></i> Filter</span>
							</div>
							<div class="side-search-form with-filters">
								<form>
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="input-style" placeholder="Keywords" />
										</div>
										<div class="col-md-4">
											<select data-placeholder="All Locations" class="chosen-select" tabindex="2">
									            <option value="All Locations">All Locations</option>
									            <option value="United States">United States</option>
									            <option value="United Kingdom">United Kingdom</option>
									            <option value="Afghanistan">Afghanistan</option>
									            <option value="Aland Islands">Aland Islands</option>
									            <option value="Albania">Albania</option>
									        </select>
										</div>
										<div class="col-md-4">
											<select data-placeholder="All Categories" class="chosen-select" tabindex="2">
									            <option value="All Categories">All Categories</option>
									            <option value="Restaurants">Restaurants</option>
									            <option value="Foods">Foods</option>
									            <option value="Hotels">Hotels</option>
									            <option value="Bars">Bars</option>
									            <option value="PlayLands">PlayLands</option>
									        </select>
										</div>
										<div class="col-md-4">
											<p>
												<input class="styled-checkbox" id="styled-checkbox-342" type="checkbox" value="value1">
												<label for="styled-checkbox-342">Radius: 50 km</label>
											</p>
										</div>
										<div class="col-md-8">
											<div class="selecteurprix">
												<div class="range-slider">
													<input class="input-range" type="range" value="250" min="100" max="500">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="filter-by-tags">
												<h3>Filter by tag:</h3>
												<div class="row">
													<div class="col-md-3">
														<p>
															<input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value1">
															<label for="styled-checkbox-2">Accepts Cards</label>
														</p>
														<p>
															<input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value1">
															<label for="styled-checkbox-3">Bike Parking</label>
														</p>
													</div>
													<div class="col-md-3">
														<p>
															<input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value1">
															<label for="styled-checkbox-4">Street Parking</label>
														</p>
														<p>
															<input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value1">
															<label for="styled-checkbox-5">Coupons</label>
														</p>
													</div>
													<div class="col-md-3">
														<p>
															<input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value1">
															<label for="styled-checkbox-6">Alcohol</label>
														</p>
														<p>
															<input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value1">
															<label for="styled-checkbox-7">Pets Friendly</label>
														</p>
													</div>
													<div class="col-md-3">
														<p>
															<input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value1">
															<label for="styled-checkbox-8">Reservations</label>
														</p>
														<p>
															<input class="styled-checkbox" id="styled-checkbox-9" type="checkbox" value="value1">
															<label for="styled-checkbox-9">Good for Kids</label>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit">Update Listings</button>
										</div>
									</div>
								</form>
							</div>
							<div class="filter-dropdowns">
								<select data-placeholder="Sort By" class="chosen-select" tabindex="2">
						            <option value="Sort By">Sort By</option>
						            <option value="Latest">Latest</option>
						            <option value="Oldest">Oldest</option>
						            <option value="Top Trending">Top Trending</option>
						            <option value="Price High">Price High</option>
						            <option value="Price Low">Price Low</option>
						        </select>
							</div>
						</div>
						<div class="grids-listings">
							<div class="row">
								@foreach($promotions as $pro)
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="listing-box">
										<div class="listing-box-thumb">
											<span class="price-list">New</span>
											<img src="{{$pro->photo}}" alt="" />
											<div class="listing-box-title">
												<!-- <h3><a href="#" title="">{{$pro->title}}</a></h3> -->
												<!-- <span>Los Angeles /  Sillicon Valley </span>	 -->
												<span>{{$pro->title}} </span>
											</div>
										</div>
										<div class="listing-rate-share">
											<div class="rated-list">
											<a target="_blank" href="{{$pro->link}}">	<span>{{$pro->link}}</span></a>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div class="pagination">
							<ul>
								<li class="prev"><a href=""><i class="la  la-arrow-left"></i></a></li>
								<li><a href="">1</a></li>
								<li><a class="active" href="">2</a></li>
								<li><a href="">3</a></li>
								<li><span class="delimeter">...</span></li>
								<li><a href="">22</a></li>
								<li class="next"><a href=""><i class="la  la-arrow-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
