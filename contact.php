<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title> contact </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
        <?php
        include './include/links.php';
        ?>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
        <!--sub banner start-->
        <div class="sub-banner overview-bgi " data-image-src="img/banner/sub-banner.jpg" data-parallax="scroll" data-speed="0.10">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->

        <!-- Contact 1 start -->
        <div class="contact-1 content-area-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <!-- Contact form start -->
                        <div class="contact-form">
                            <form id="contact_form" action="" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group fullname">
                                            <input type="text" name="full-name" class="input-text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group enter-email">
                                            <input type="email" name="email" class="input-text" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="input-text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="input-text" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                        <div class="form-group message">
                                            <textarea class="input-text" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <div class="send-btn mb-0">
                                            <button type="submit" class="btn-md btn-theme">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact form end -->
                    </div>
                    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
                        <!-- Contact details start -->
                        <div class="contact-details">
                            <div class="main-title-2">
                                <h3>Our Address</h3>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Office Address</h4>
                                    <p>VTA Ahangama,Galle, Srilanka.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Phone Number</h4>
                                    <p>
                                        <a href="tel:0477-0477-8556-552">office: 111 111 1111</a>
                                    </p>
                                    <p>
                                        <a href="tel:+55-417-634-7071">Mobile: 111 111 1111</a>
                                    </p>
                                </div>
                            </div>
                            <div class="media mb-0">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Email Address</h4>
                                    <p>
                                        <a href="mailto: info@themevessel.com">info@vtahotel.com</a>
                                    </p>
                                    <p>
                                        <a href="" target="_blank"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact details end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-1 end -->

        <!-- Google map start -->
        <div class="section">
            <div class="map">
                <div id="map" class="contact-map"></div>
            </div>
        </div>
        <!-- Google map end -->


        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>

        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
        <script>
            function LoadMap(propertes) {
                var defaultLat = 40.7110411;
                var defaultLng = -74.0110326;
                var mapOptions = {
                    center: new google.maps.LatLng(defaultLat, defaultLng),
                    zoom: 15,
                    scrollwheel: false,
                    styles: [
                        {
                            featureType: "administrative",
                            elementType: "labels",
                            stylers: [
                                {visibility: "off"}
                            ]
                        },
                        {
                            featureType: "water",
                            elementType: "labels",
                            stylers: [
                                {visibility: "off"}
                            ]
                        },
                        {
                            featureType: 'poi.business',
                            stylers: [{visibility: 'off'}]
                        },
                        {
                            featureType: 'transit',
                            elementType: 'labels.icon',
                            stylers: [{visibility: 'off'}]
                        },
                    ]
                };
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                var infoWindow = new google.maps.InfoWindow();
                var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
                (function (marker) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent("" +
                                "<div class='map-edu contact-map-content'>" +
                                "<div class='map-content'>" +
                                "<p class='address'>123 Kathal St. Tampa City, </p>" +
                                "<ul class='map-edu-list'> " +
                                "<li><i class='fa fa-phone'></i>  +0477 85X6 552</li> " +
                                "<li><i class='fa fa-envelope'></i>  info@themevessel.com</li> " +
                                "<li><a href='index.html'><i class='fa fa-globe'></i>  http://http://themevessel.com</li></a> " +
                                "</ul>" +
                                "</div>" +
                                "</div>");
                        infoWindow.open(map, marker);
                    });
                })(marker);
            }
            LoadMap();
        </script>
    </body>
</html>
