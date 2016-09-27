@extends('layout')
      @section('content')
       <!--  Banner Area Start here -->
       <div class="banner-area">
         <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                  <h2>Contáctanos</h2>
                  <div class="breadcumb">
                    <ul>
                      <li> <a href="/">Inicio</a> </li>
                      <li>Contáctanos</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
       <!--  Banner Area End here -->
      <!-- Main Contact page Start here -->
      <div class="contact-page-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <div class="contact-form-area">
                <h2>Formulario de Contácto</h2>
                  <form method="post" id="contactForm">
                    <fieldset>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Nombre : </label>
                          <input type="text" name="name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>E-mail : </label>
                          <input type="email" name="email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Número de Teléfono : </label>
                          <input type="tel" name="tel" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Mensaje: </label>
                          <textarea cols="40" rows="5" name="message" class="textarea form-control"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <button class="btn-send submit-buttom" type="submit">Enviar Mensaje</button>
                        </div>
                      </div>
                    </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="office-address">
                <h2>Dirección de Contacto</h2>
                <ul>
                  <li><a href="#"><i class="fa fa-map-marker"></i><span>Calle Ángel Mario Martínez Zentella 19, Tabasco, MX CP 86096</span></a></li>
                  <li><a href="#"><i class="fa fa-phone"></i><span>(993) 315 2580</span></a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i><span>info@morenomontero.com</span></a></li>
                  <li><a href="#"><i class="fa fa-building-o"></i><span>(123) 456 789 0000</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Contact page End here -->
      <div class="google-map-area">
        <div id="googleMap" style="width:100%;height:470px;"></div>
      </div>
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->
        <!-- Google Map js -->
        <script>
            var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('googleMap'), {
                    center: {lat: 17.974858, lng: -92.926600},
                    zoom: 16
                });
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: 'assets/img/map-marker.png',
                    map: map
                });
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkYVR8ff2T8i6cFnQRAZ_g-itNQ6dRQp8&amp;callback=initMap"
                async defer></script>
        <script src="js/bootstrap.min.js"></script>   
		<!-- Google Map js -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
        var mapOptions = {
        zoom: 15,
        scrollwheel: false,
        center: new google.maps.LatLng(-37.81618, 144.95692)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
          mapOptions);


        var marker = new google.maps.Marker({
        position: map.getCenter(),
        animation:google.maps.Animation.BOUNCE,
        icon: 'img/map-marker.png',
        map: map
        });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
        </script> -->
@endsection
