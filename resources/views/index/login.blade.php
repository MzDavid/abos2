@extends('layout')
      
      @section('content')
       <!--  Banner Area Start here -->
       <div class="banner-area">
         <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                  <h2>Iniciar Sesión</h2>
                  <div class="breadcumb">
                    <ul>
                      <li> <a href="/">Inicio</a> </li>
                      <li>Iniciar Sesión</li>
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
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="contact-form-area">
                <h2>Iniciar Sesión</h2>
                  <form action="http://radiustheme.com/demo/html/miakolegal/miakolegal/process.php" method="POST">
                    <fieldset>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Usuario : </label>
                          <input type="text" name="username" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Contraseña : </label>
                          <input type="password" name="password" class="form-control" required>
                        </div>
                      </div>
            
                      <div class="col-sm-12">
                        <div class="form-group">
                          <button class="btn-send submit-buttom" type="submit">INICIA SESIÓN</button>
                        </div>
                        <a href="recuperar-password">¿Olvidaste tu contraseña?</a>
                      </div>
                    </fieldset>
                </form>
              </div>
            </div>
           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="blog-sidebar-area">
              <div class="single-sidebar">
                <h2>Áreas de Practica</h2>
                <div class="sidebar-category">
                  <ul>
                    <li><a href="single">Civil</a></li>
                    <li><a href="single">Amparo</a></li>
                    <li><a href="single">Familiar</a></li>
                    <li><a href="single">Laboral</a></li>
                    <li><a href="single">Notarial</a></li>
                    <li><a href="single">Ley de Transito</a></li>   
                  
                  </ul>
                </div>
              </div>
              <div class="single-sidebar">
                <h2>Publicaciones Recientes</h2>
                <div class="sidebar-recent-post">
                  <div class="media single-post">
                    <div class="pull-left">
                      <a href="single">
                        <img class="media-object" src="assets/img/blog/4.jpg" alt="post">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single.html">Nuevas Leyes</a></h4>
                      <div class="posted-date">
                        <a href="single.html">Febrero 01, 2016</a>
                      </div>
                      <p>Lorem consectetur adipiscing elit.</p>                 
                    </div>
                  </div>
                  <div class="media single-post">
                    <div class="pull-left">
                      <a href="single.html">
                        <img class="media-object" src="assets/img/blog/5.jpg" alt="post">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single.html">Iniciativa de Ley</a></h4>
                      <div class="posted-date">
                        <a href="single.html">Febrero 01, 2016</a>
                      </div>
                      <p>Lorem ipsum dolor sit ametet</p>                 
                    </div>
                  </div>
                  <div class="media single-post">
                    <div class="pull-left">
                      <a href="single.html">
                        <img class="media-object" src="assets/img/blog/6.jpg" alt="post">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="single.html">Derecho Penal</a></h4>
                      <div class="posted-date">
                        <a href="single.html">Febrero 01, 2016</a>
                      </div>  
                      <p>Lorem ipsum dolor sit ametet</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
      </div>
@endsection