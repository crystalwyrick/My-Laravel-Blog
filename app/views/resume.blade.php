@extends('layouts.master')
{{-- example of top-script --}}
@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/resume.css">

@stop
@section('content')
    <title>Resume Crystal Wyrick</title>
    		
		
    <body>
    	<main>
    		<h1>Let's play Roll Dice</h1>
    		<a href="">Guess 1</a>
	    	<div class="container">
	    		<div class="row">
				    <div class="col-md-4">
				  		<h1>Crystal Wyrick</h1>
					 	<img class="super_realtor" style="border:12px solid black" src="/img/super_realtor.jpg" align="middle";>
						<div> 	
							<a href="https://www.facebook.com/TeamCrystal" target="_blank">
								<img style="contact_button" alt="Facebook" src="/img/fb.jpg">
							</a>
							<a href="ttps://twitter.com/crystalwyrick" target="_blank">
								<img style="contact_button" alt="Twitter" src="/img/tw.jpg">
							</a> 
							<a href="http://www.linkedin.com/pub/crystal-wyrick/b/703/806" target="_blank">
								<img style="contact_button" alt="LinkedIn" src="/img/li.jpg">
							</a>
							<a href="mailto:crystalwyrick@kw.com">
								<img style="contact_button" alt="Email Me" src="/img/ma.jpg">
							</a>
						</div>
				  	</div>  
				  	<div class="col-md-8">
				  		<h1>Skills</h1>
				  	
				  			<div class="col-md-4">
				  				<img class="skills_background" src="/img/primary_circles.jpg">
						  		<div>
						  			<button class="btn btn-primary creativity" data-toggle="collapse" href="#creativity" aria-expanded="false" aria-controls="collapseExample">Creativity</button>
									<div class="collapse" id="creativity">
				                        <div class="well">
				                         	<ul>
									  			<li>kjaksfkjlkjdlkjkkkskldjjfiowefoiwjeoisjd</li>
									  			<li>jfjsahfjosjfkljkfljdfiwiofjoifdfjd</li>
												<li>ncudskdlfjisjfsjflksjflksjflisdshfbd</li>
												<li>kksjslkdfjksjflksjfklsjklfjsdklsiwn</li>
									  		</ul>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4">
						  		<div>
						  			<button class="btn btn-primary communication" data-toggle="collapse" href="#communication" aria-expanded="false" aria-controls="collapseExample">Communication</button>
									<div class="collapse collapse_communication" id="communication">
				                        <div class="well">
				                         	<ul>
									  			<li>xxxxxxxxx</li>
									  			<li>jfjsahfjd</li>
												<li>ncudhfbd</li>
												<li>kksjsiwn</li>
									  		</ul>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4">
						  		<div>
						  			<button class="btn btn-primary analysis" data-toggle="collapse" href="#analysis" aria-expanded="false" aria-controls="collapseExample">Analysis</button>
									<div class="collapse" id="analysis">
				                        <div class="well">
				                         	<ul>
									  			<li>kooooooooo</li>
									  			<li>jfjsahfjd</li>
												<li>ncudhfbd</li>
												<li>kksjsiwn</li>
									  		</ul>
				                        </div>
				                    </div>
				                </div>
				            </div>
				  		</div>
				 	</div>
				</div>
			</div>
					
					<!-- use bootstap hidden classes ie hidden-sm -->
				  
				
	    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
			
    	</main>
    </body>
</html>
{{-- example of bottom script --}}
@section('bottom-script')
	<script src="/js/resume.js"></script>
@stop