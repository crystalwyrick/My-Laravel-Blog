@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Resume Crystal Wyrick</title>
    		<link rel="stylesheet" href="/codeup.dev/public/css/bootstrap.css">
    		<link rel="stylesheet" href="codeup.dev/public/css/resume.css">
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    		<link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
			<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="/js/bootstrap.js"></script>
    </head>
    <body>
    	<main>
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
@stop