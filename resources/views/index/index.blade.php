@extends('layout')

        @section('content')
       <!-- slider -->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides"> 
                    <img src="assets/img/slides/slide1.jpg" alt="image" title="#slider-direction-1"  />
                    <img src="assets/img/slides/slide2.jpg" alt="image" title="#slider-direction-2"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow zoomIn" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomIn;">
                            SOMOS <span class="title-builder"> La </span><span class="title-builder"> Voz </span> De <span class="title-builder"> La </span> <span class="title-builder"> Justicia </span>
                            </div>
                            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn" style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                            Abogacía / Firma Legal / Fiscal
                            </div>
                        </div>
                        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button wow fadeIn" style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="temporal" class="btn btn-success">Leer Más</a>
                        </div>
                    </div>  
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                  <div class="slider-progress"></div>
                  <div class="slider-content t-lfr s-tb slider-2">
                    <div class="title-container s-tb-c">
                      <h1 class="title1">Para conseguir nuestra propia justicia</h1>                     
                      <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn" style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                      Abogacía / Firma Legal / Fiscal
                      </div>
                      <div style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s;" class="button wow fadeIn" data-wow-duration="4s" data-wow-delay="0.4s">
                        <a class="btn btn-success" href="contacto">Contactanos</a>
                        </div>                     
                    </div>
                  </div>  
                </div>
            </div>
        </div>
        <!-- slider end-->
        <!-- Slider Buttom Area Start Here -->
        <div class="slider-buttom-area">
          <div class="container-fluid acurate">
            <div class="row acurate">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 acurate">
                <div class="single-slider-buttom-area slider-button-one">
                   <div class="slider-buttom-overlay"></div>                   
                  <div class="content-area">
                    <div class="first-box-content"> 
                    <h3>Casos de emergencia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                    <p class="call-now">Llámanos ahora</p>
                    <p class="phone-number"><a href="tel:9933152580">+52 (993) 315 2580</a></p>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 acurate">
                <div class="single-slider-buttom-area slider-button-two">
                    <div class="slider-buttom-overlay"></div>                    
                  <div class="content-area">
                    <h3>¿Necesita ayuda legal?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eos, quod, earum aspernatur officiis.</p>                 
                    <a href="contact.html" class="call-us-buttom">Hacer una cita</a>

                  </div>
                </div>
                                 
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 acurate">
                <div class="single-slider-buttom-area slider-button-three">
                   <div class="slider-buttom-overlay"></div>
                  <div class="content-area">
                       <h3>Horarios de Atención</h3>
                    <ul>
                      <li>Lunes - Viernes <span>  8.00 am- 10.00 pm </span></li>
                      <li>Lunes - Viernes <span>  8.00 am- 10.00 pm </span></li>
                      <li>Lunes - Viernes <span>  8.00 am- 10.00 pm </span></li>
                    </ul>
                  </div>
                 
                </div>                
              </div>
            </div>
          </div>
        </div>        
        <!-- Slider Buttom Area End Here -->
       <!-- About Lawyer Area Start Here -->
       <div class="about-lawyer-area">
         <div class="container">
           <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 <div class="about-lawyer-featured-image">
                   <a href="about.html"><img src="assets/img/about.png" alt="about"></a>
                 </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                 <div class="about-content-area">
                   <h1>Acerca de <span>Moreno Montero</span></h1>
                   <p>There are many variations of passages of Lorem Ipsum availabbut the humourrandomisedwords.There are many variations of passages of Lorem Ipsum availablebut the majority.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius consequat magna, id
molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus.</p>
                   <ul>
                     <li>Abogados Expertos</li>
                     <li>Rápido Caso Completo</li>
                     <li>Apoyo Rápido</li>
                     <li>Asesoramiento Gratuito</li>
                   </ul>
                   <div class="read-more-button">
                     <a href="about.html">Leer Más</a>
                   </div>
                 </div>
               </div>
           </div>
         </div>
       </div>
       <!-- About Lawyer Area End Here -->
       <!-- Our Practice Area Start Here -->
       <div class="container-fluid our-practice-area">
         <div class="container">
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="section-title-area">
                 <h2>Nuestras ÁREAS DE PRACTICA</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
               </div>
             </div>
           </div>
         </div>
         <div class="practice-area">
           <div class="practice-section">        
              <div class="single-practice">
                <div class="single-practice-content">
                 <i class="fa fa-users"></i>
                 <h3><a href="single-practice.html">Derecho Burocrático</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
                 <div class="read-more">
                   <a href="single-practice.html">Leer Más</a>
                 </div>
                </div>        
              </div>        
              <div class="single-practice">
                <div class="single-practice-content">
                 <i class="fa fa-pencil-square-o"></i>
                 <h3><a href="single-practice.html">Derecho Familiar</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
                 <div class="read-more">
                   <a href="single-practice.html">Leer Más</a>
                 </div>
                </div>        
              </div>        
              <div class="single-practice">
                  <div class="single-practice-content">
                <i class="fa fa-briefcase"></i>
                 <h3><a href="single-practice.html">Derecho Laboral</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
                 <div class="read-more">
                   <a href="single-practice.html">Leer Más</a>
                 </div>
                </div>        
              </div>        
              <div class="single-practice">
                   <div class="single-practice-content">
                 <i class="fa fa-users"></i>
                 <h3><a href="single-practice.html">Derecho Penal Empresarial</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
                 <div class="read-more">
                   <a href="single-practice.html">Leer Más</a>
                 </div>
                </div>        
              </div>        
              <div class="single-practice">
                   <div class="single-practice-content">
                 <i class="fa fa-line-chart"></i>
                 <h3><a href="single-practice.html">Derecho Administrativo</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
                 <div class="read-more">
                   <a href="single-practice.html">Leer Más</a>
                 </div>
                </div>        
              </div>        
              <div class="single-practice">
                   <div class="single-practice-content">
                 <i class="fa fa-users"></i>
                 <h3><a href="single-practice.html">Derecho Civil y Mercantil</a></h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente.</p>
                 <div class="read-more">
                   <a href="single-practice.html">Leer Más</a>
                 </div>
                </div>
              </div>
           </div>
         </div>
       </div>
       <!-- Our Practice Area End Here -->
       <!-- Advertise Banner Area Start -->
       <div class="advertise-area">
         <div class="container">
           <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="bennar">
                  <h2>Sin costo <span>hasta</span> <br/>Que <span>ganemos</span> El caso.</h2>
                </div>
              </div>
           </div>
         </div>
       </div>
       <!-- Advertise Banner Area End -->
      <!-- Happy Client Area Start Here -->
      <div class="happy-client-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="section-title-area">
                 <h2>Clientes Satisfechos</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente sint odit iusto blanditiis doloribus.</p>
               </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="client-section-area">
                <div class="client-section">
                  <div class="single-client-area">
                    <h3><a href="#">Runie Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/0.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Runie Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/00.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Robin Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/01.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Runie Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/00.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Roza Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/0.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Runie Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/00.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Robin Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/01.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Runie Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/00.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Roza Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/0.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                  <div class="single-client-area">
                    <h3><a href="#">Runie Albert</a></h3>
                    <p class="designation">CEO, Roza</p>
                    <div class="picture">
                      <a href="#"><img src="assets/img/clients/00.jpg" alt=""></a>
                      <ul>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="disable"><a href="#"><i class="fa fa-star"></i></a></li>
                      </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia blanditiis rerum, a harum</p>
                  </div>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Happy Client Area End Here -->
      <!-- Our Attorney Start Here -->
      <div class="our-attorney-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="section-title-area">
                 <h2>Nuestro Equipo</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente sint odit iusto blanditiis doloribus.</p>
               </div>
            </div>
          </div>
          <div class="our-attorney">
            <div class="single-attorney">
              <div class="attorney-picture">
                <a href="#"><img src="assets/img/attorney/3.jpg" alt=""></a>
                <div class="overlay">
                  <h2><a href="#">Ver biografía</a></h2>
                  <div class="social-media">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="attorney-content">                
                <h3><a href="#">Jhon Doe</a></h3>
                <p>Abogado & Fundador</p>
              </div>
            </div>
            <div class="single-attorney">
              <div class="attorney-picture">
                <a href="#"><img src="assets/img/attorney/1.jpg" alt=""></a>
                <div class="overlay">
                  <h2><a href="#">Ver biografía</a></h2>
                  <div class="social-media">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="attorney-content">                
                <h3><a href="#">M.Albert</a></h3>
                <p>Abogado & Fundador</p>
              </div>
            </div>
            <div class="single-attorney">
              <div class="attorney-picture">
                <a href="#"><img src="assets/img/attorney/2.jpg" alt=""></a>
                <div class="overlay">
                  <h2><a href="#">Ver biografía</a></h2>
                  <div class="social-media">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="attorney-content">                
                <h3><a href="#">Jhon Doe</a></h3>
                <p>Abogado & Fundador</p>
              </div>
            </div>
            <div class="single-attorney">
              <div class="attorney-picture">
                <a href="#"><img src="assets/img/attorney/4.jpg" alt=""></a>
                <div class="overlay">
                  <h2><a href="#">Ver biografía</a></h2>
                  <div class="social-media">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="attorney-content">                
                <h3><a href="#">M.Albert</a></h3>
                <p>Abogado & Fundador</p>
              </div>
            </div>
            <div class="single-attorney">
              <div class="attorney-picture">
                <a href="#"><img src="assets/img/attorney/1.jpg" alt=""></a>
                <div class="overlay">
                  <h2><a href="#">Ver biografía</a></h2>
                  <div class="social-media">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="attorney-content">                
                <h3><a href="#">Jhon Doe</a></h3>
                <p>Abogado & Fundador</p>
              </div>
            </div>
            <div class="single-attorney">
              <div class="attorney-picture">
                <a href="#"><img src="assets/img/attorney/2.jpg" alt=""></a>
                <div class="overlay">
                  <h2><a href="#">Ver biografía</a></h2>
                  <div class="social-media">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="attorney-content">                
                <h3><a href="#">Jhon Doe</a></h3>
                <p>Abogado & Fundador</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Our Attorney End Here -->
      <!-- Latest News Area Start Here -->
      <div class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="section-title-area">
                     <h2>Últimas Notas de Prensa</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates libero possimus sapiente sint odit iusto blanditiis doloribus.</p>
                   </div>
                </div>            
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class="single-news-area">
                     <div class="news-featured-image">
                       <a href="#"><img src="assets/img/blog/1.jpg" alt="image"></a>              
                       <ul>
                         <li class="active" style="padding-right: 49px; border-left-width: 20px; padding-left: 50px;">Mar,13 2016</li>
                         <li><a href="#" style="padding-left: 40px;"><i class="fa fa-user"> </i> by admin</a></li>
                         </ul>
                     </div>
                     <h3><a href="#">Is Going To Get Ugly ITher</a></h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum, laborum. Commodi nostrum culpa maxime provident quisquam, praesentium........</p>
                   </div>
                </div> 

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class="single-news-area">
                     <div class="news-featured-image">
                       <a href="#"><img src="assets/img/blog/2.jpg" alt="image"></a>
                       <ul>
                         <li class="active" style="padding-right: 49px; border-left-width: 20px; padding-left: 50px;">Mar,13 2016</li>
                         <li><a href="#" style="padding-left: 40px;"><i class="fa fa-user"> </i> by admin</a></li>
                         </ul>
                     </div>
                     <h3><a href="#">The Bond Market Is Going</a></h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum, laborum. Commodi nostrum culpa maxime provident quisquam, praesentium........</p>
                   </div>
                </div>       

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   <div class="single-news-area">
                     <div class="news-featured-image">
                       <a href="#"><img src="assets/img/blog/3.jpg" alt="image"></a>
                       <ul>
                         <li class="active" style="padding-right: 49px; border-left-width: 20px; padding-left: 50px;">Mar,13 2016</li>
                         <li><a href="#" style="padding-left: 40px;"><i class="fa fa-user"> </i> by admin</a></li>
                      </ul>
                     </div>
                     <h3><a href="#">Get Ugly ITher Isn't A Rebound</a></h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum, laborum. Commodi nostrum culpa maxime provident quisquam, praesentium........</p>
                   </div>
                </div>                 
            </div>
        </div>
      </div>
      <!-- Latest News Area End Here -->
@endsection