   <?php include'header.php';?>

    <div class="header-background"></div>
</header>

<section class="crew-4">

		<div class="container">
		<br><br>
	        	<div class="row">
<div class="col-sm-12 text-center">
<img src="img/title-image1.png"><br>
 <h2 class="heading">Get IN TOUCH</h2>
</div>
</div>
<br><br>
	</div>

<div class="div2" style="width:100%; border:0; background:white; margin:0; padding:0;">

        <div class="container">
	        <div class="row">
	        <div class="col-sm-12 col-md-12 col-lg-12">
		        <section class="contacts-2">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 text-center">


	           <div class="row">
	           <div class="col-sm-12">
	            <form method="post" name="myemailform" action="form-to-email.php">

                    <input type="text" name="name" class="form-control" placeholder="Name" maxlength="60" size="40">

                    <input type="text" name="email" class="form-control" placeholder="Email" maxlength="80" size="30">

                    <textarea class="form-control" name="message" maxlength="1000" cols="25" rows="6"></textarea>

                    <button type="submit" name='submit' value="submit" class="btn btn-primary"><span class="fui-mail"></span></button>
                </form>
                <script type="text/javascript">
				// Code for validating the form
				// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
				// for details
				var frmvalidator  = new Validator("myemailform");
				frmvalidator.addValidation("name","req","Please provide your name");
				frmvalidator.addValidation("email","req","Please provide your email");
				frmvalidator.addValidation("email","email","Please enter a valid email address");
				</script>
	           </div>
	           </div>
            </div>
            <div class="col-xs-0 col-sm-1"></div>
            <div class="col-xs-12 col-sm-6">



		        <div class="row">
		        	<div class="col-sm-12">
		        	<h4>CAR INSANITY MARKHAM</h4>
		        	<p>
		        		<span class="fui-bubble"></span> (+1) 905.471.9888<br>
		            	<span class="fui-mail"></span> service@carinsanity.ca<br>
		            	<span class="fui-location"></span> 185 Bullock Dr. Unit. 10, Markham, ON, L3P 7R4
		            </p>
		            <br>
		            <h4>WORKING HOURS</h4>
		            <p><span class="fui-time"></span> Monday to Sunday: 10 A.M. to 7 P.M.</p>

		        	</div>
		        </div>

            </div>

        </div>

    </div>

</div>

</section>
	        </div>
	        </div>
        </div>
    <!--/.container-->
</section>


<section class="contacts-5">
<div class="div2" style="width:100%; border:0; background:white; margin:0; padding:0;">
	<style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 100%;
                height: 300px;
            }
        </style>

        <!--
            You need to include this script tag on any page that has a Google Map.

            The following script tag will work when opening this example locally on your computer.
            But if you use this on a localhost server or a live website you will need to include an API key.
            Sign up for one here (it's free for small usage):
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key

            After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY&sensor=false"></script>
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(43.873628, -79.281592), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#172330"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(43.873628, -79.281592),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>


        <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
        <div id="map"></div>

</div>
</section>



<section class=" sponsors">
<div class="div2" style="width:100%; border:0; background:white; margin:0; padding:0;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br>
				<img src="img/title-image1.png" width="120px; height:auto;"><br>
				<h6 class="heading" style="font-size:18px;">our sponsors</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-1 col-sm-2"></div>
			<div class="col-xs-1 col-sm-2"></div>
			<div class="col-xs-4 col-sm-2">
				<h1>
				<a href="http://www.legendpot.com/" target="_blank">
					<img src="img/legendpot.png" class="img-responsive">
				</a>
				</h1>
			</div>
			<div class="col-xs-4 col-sm-2">
				<h1>
				<a href="http://fishlegend.ca/" target="_blank">
					<img src="img/fishlegend.png" class="img-responsive">
				</a>
				</h1>
			</div>
			<div class="col-xs-1 col-sm-2"></div>
			<div class="col-xs-1 col-sm-2"></div>
		</div>
	</div>
</div>
</section>
<?php include'footer.php';?>