@extends('fontend.index')
@include('fontend.header')
@section('content')

	<section>
		<div class="block gray ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 column">
					<section>
						  <div class="block gray">
						    <div class="container">
						      <div class="row">
						        <div class="col-md-12">
						          <div class="heading">
						            <h2>ArtIcles & TIps</h2>
						           </div>
						          <div class="blog-sec">
						            <div class="row">
													@php
													//Get videos from channel by YouTube Data API
														$API_key    = 'AIzaSyCwhDHpbVd7byc4p0_1jRVpEYX84GlI52Q';
														$channelID  = 'UCqFH5k4uBVijwMSCbApoiJQ';
														$maxResults = 12;

														$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

														foreach($videoList->items as $item){
												//Embed video
												if(isset($item->id->videoId)){
													 echo'<div class="col-md-4">
								                <div class="blog-post">
								                  <div class="blog-post-thumb">
																	     	<iframe width="328" height="250" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
																  	</div>
																		<div class="blog-detail">
																		 <ul class="blog-metas">
																			 <li><a href="#" title="">'.$item->snippet->publishedAt.'</a></li>
																		 </ul>
																		 <p style="font-size:16px;color: #100e0e;font-weight: 500;">'.$item->snippet->title.'</p>
																		 <p>'.$item->snippet->description.'</p>
																		 <!-- <a href="#" title="">MORE</a> -->
																	 </div>
								                </div><!-- BLog Post  -->
								              </div>';
												}
											}

													@endphp

						            </div>
						            <a href="#" title="" class="view-all-blog">View Blog</a>
						          </div>
						        </div>
						      </div>
						    </div>
						  </div>
						</section>

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
