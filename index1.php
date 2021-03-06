<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>e-Learning</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="active">
                <div class="sidebar-header">
                    <h3>e-learning</h3>
                </div>
                
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active">Home</li>
                    <li data-target="#myCarousel" data-slide-to="1">Map</li>
                    <li data-target="#myCarousel" data-slide-to="2">Concepts</li>
                    <li data-target="#myCarousel" data-slide-to="3">Learning</li>
                    <li data-target="#myCarousel" data-slide-to="4">Quiz</li>
                </ul>
                <!-- <ul class="">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul> -->
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="">

                
                <header>
                    <h2><span>Master in Epidemiology and Public</span></br> Health Environmental Risks in public health</h2>
                    <!-- <h1>E-learning</h1> -->
                    <img src="images/logo.png" alt="" height="60px;"/>
                </header>
                   <div class="contentholder">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <!-- Wrapper for slides -->

                              <div class="carousel-inner">
                                    
                                    <div class="item active banner">
                                      <?php include('banner.php'); ?>
                                    </div><!-- item -->

                                    <div class="item">
                                       <?php include('text_slide.php'); ?>
                                    </div><!-- item -->

                                    <div class="item block text-center">
                                      <h3><span>1</span>Map</h3>
                                        <div>
                                            <div class="box block_1">
                                                Index
                                            </div>
                                            <div class="arrow-1">
                                                <img src="images/arrow-1.png" alt=""/>
                                            </div>  
                                            <div class="box block_2">
                                                Concepts
                                            </div>
                                            <div class="arrow-2">
                                                <img src="images/arrow-2.png" alt=""/>
                                            </div>   
                                            <div class="box block_3">
                                            </div>
                                            <div class="arrow-5">
                                                <img src="images/arrow-2.png" alt=""/>
                                            </div>  
                                            <div class="box block_4">
                                                Learning
                                            </div>  
                                            <div class="arrow-3">
                                                <img src="images/arrow-3.png" alt=""/>
                                            </div>  
                                            <div class="box block_5">
                                                Questions
                                            </div>
                                            <div class="arrow-6">
                                                <img src="images/arrow-5.png" alt=""/>
                                            </div>
                                            <div class="box block_6">
                                                Results
                                            </div> 
                                            <div class="arrow-7">
                                                <img src="images/arrow-6.png" alt=""/>
                                            </div>
                                        </div>                                                                     
                                    </div><!-- item -->

                                    <div class="item page_3">
                                        <h3><span>2</span>Concepts</h3>
                                         <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#home">Effects of Population Growth on our Environment!</a></li>
                                            <li><a data-toggle="tab" href="#menu1">Examples of Hazard and Their Effects</a></li>
                                          </ul>

                                          <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                              <h3>General</h3>
                                                  <p><strong>Note:</strong> The <strong>Climate</strong> change is the environmental challenge of this generation, and it is imperative that we act before it's too late</p>
                                                  <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Generation of Waste</a>
                                                        </h4>
                                                      </div>
                                                      <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Threat to Biodiversity</a>
                                                        </h4>
                                                      </div>
                                                      <div id="collapse2" class="panel-collapse collapse">
                                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                      </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                      <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> Strain on Forests:</a>
                                                        </h4>
                                                      </div>
                                                      <div id="collapse3" class="panel-collapse collapse">
                                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                      </div>
                                                    </div>
                                                  </div> 
                                            </div><!--tab-pane  -->
                                            <div id="menu1" class="tab-pane fade text-center">
                                                 <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th>Workplace Hazard</th>
                                                        <th>Example of Hazard</th>
                                                        <th>Examples of Harm Hazard</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>Thing</td>
                                                        <td>Knife</td>
                                                        <td>Cut</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Source of Energy</td>
                                                        <td>Electricity</td>
                                                        <td>Shock,electrocution</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Condition</td>
                                                        <td>Wet floor</td>
                                                        <td>Slips, falls</td>
                                                      </tr>
                                                    </tbody>
                                                    </table>                                              
                                            </div><!-- tab-pane  -->
                                            </div><!-- tab-content -->
                                          </div>
                                          <div class="item flip_page">
                                            <h3><span>3</span>Learning</h3>
                                            <div class="content">
                                                <ul>
                                                    <h4>Concepts</h4>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                                                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</li>
                                                    <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</li>
                                                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                    <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                </ul>
                                                <img src="images/right_color.png" style="width:auto;height:auto" alt=""/>
                                                <div style="clear:both"></div>
                                            </div>
                                            <h4>Flip Around</h4>
                                            <div class="col-sm-3">
                                                  <div class="flip">
                                                    <div class="card"> 
                                                      <div class="face front"> 
                                                        <div class="inner">   
                                                          <img src="images/flip_1.jpg">
                                                        </div>
                                                      </div> 
                                                      <div class="face back"> 
                                                        <div class="inner text-center"> 
                                                          <h3>Improved efficiency through automation</h3>           
                                                        </div>
                                                      </div>
                                                    </div>   
                                                  </div>
                                                </div>
                                              <div class="col-sm-3">
                                                  <div class="flip">
                                                    <div class="card"> 
                                                      <div class="face front"> 
                                                        <div class="inner">   
                                                          <img src="images/flip_2.jpg">
                                                        </div>
                                                      </div> 
                                                      <div class="face back"> 
                                                        <div class="inner text-center"> 
                                                          <h3>Improved efficiency through automation</h3>           
                                                        </div>
                                                      </div>
                                                    </div>   
                                                  </div>
                                                </div>
                                              <div class="col-sm-3">
                                                  <div class="flip">
                                                    <div class="card"> 
                                                      <div class="face front"> 
                                                        <div class="inner">   
                                                          <img src="images/flip_3.jpg">
                                                        </div>
                                                      </div> 
                                                      <div class="face back"> 
                                                        <div class="inner text-center"> 
                                                          <h3>Improved efficiency through automation</h3>
                                                          
                                                        </div>
                                                      </div>
                                                    </div>   
                                                  </div>
                                                </div>
                                              <div class="col-sm-3">
                                                  <div class="flip">
                                                    <div class="card"> 
                                                      <div class="face front"> 
                                                        <div class="inner">   
                                                          <img src="images/flip_4.jpg">
                                                        </div>
                                                      </div> 
                                                      <div class="face back"> 
                                                        <div class="inner text-center"> 
                                                          <h3>Improved efficiency through automation</h3>
                                                          
                                                        </div>
                                                      </div>
                                                    </div>   
                                                  </div>
                                                </div>
                                    </div><!-- item -->
                                     <div class="item quiz">    
                                    <h3><span>4</span>Quiz</h3>
                          <div class="todoEjercicios ejercicioVF">
                          <div class="row-fluid">
                              <div class="botoneraEjercicios clearfix">
                    
                        <!-- <button class="btn pull-left botonesEjercicios" id="turespuesta" onclick="cargarPopup('comprobar');"><i class="icon-user icon-large"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Check answer</font></font></button> -->
                                  <!-- <button class="btn pull-left botonesEjercicios" id="solucion" onclick="solucion()"><i class="icon-ok icon-large"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Solution</font></font></button> -->
                                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Result</button>
                                  <!-- <button class="btn pull-left botonesEjercicios" id="borrar" onclick="borrar()"><i class="icon-trash icon-large"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Delete</font></font></button> -->
                              </div>
                          </div>
                    <div data-preg="1" class="ejercicioVF_opciones clearfix multiple" style="margin-bottom: 25px;">
                      <div class="enunciadoVF col-xs-12"><p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Among the resources likely to be used in environmental health are:</font></font></p></div>
                              <div class="row-fluid opcionesRadio" style="text-align: left;">
                                  <label class="radioejer col-xs-12 ">
                                      <input type="radio" name="optionsRadios1" value="fail" onclick="marcar(this)" id="btn1.1">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Environmental epidemiology studies.</font></font></span>
                                 
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios1" value="fail" onclick="marcar(this)" id="btn1.2">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Environmental audits.</font></font></span>
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                      <input type="radio" name="optionsRadios1" value="fail" onclick="marcar(this)" id="btn1.3">
                                      <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Risk analysis.</font></font></span>
                                  </label>
                                   <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios1" value="success" onclick="marcar(this)" id="btn1.4">
                           <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> All the previous ones.</font></font></span>
                                    </label>
                              </div>
                          </div>
                    <div data-preg="2" class="ejercicioVF_opciones clearfix" style="margin-bottom: 25px;">
                      <div class="enunciadoVF col-xs-12"><p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2.</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> One of the following actions can be considered proper for environmental health services:</font></font></p></div>
                              <div class="row-fluid opcionesRadio" style="text-align: left;">
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios2" value="fail" onclick="marcar(this)" id="btn2.1">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Evaluation of the effectiveness and effectiveness of physical activity programs.</font></font></span>
                                    
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios2" value="success" onclick="marcar(this)" id="btn2.2">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Surveillance and sanitary control of water for human consumption.</font></font></span>
                                    
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                     <input type="radio" name="optionsRadios2" value="fail" onclick="marcar(this)" id="btn2.3">
                           <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Epidemiology and prevention of mental illness.</font></font></span>
                                   
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios2" value="fail" onclick="marcar(this)" id="btn2.4">
                           <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Epidemiology and prevention of traffic accidents.</font></font></span>
                                    
                                  </label>
                              </div>
                          </div>
                          <div data-preg="3" class="ejercicioVF_opciones clearfix" style="margin-bottom: 25px;">
                      <div class="enunciadoVF col-xs-12"><p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3.</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> The environment constitutes one of the determinants of health:</font></font></p></div>
                              <div class="row-fluid opcionesRadio" style="text-align: left;">
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios3" value="success" onclick="marcar(this)" id="btn3.1">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> True</font></font></span>
                                    
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios3" value="fail" onclick="marcar(this)" id="btn3.2">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> False</font></font></span>
                                   
                                  </label>
                              </div>
                          </div>
                            <div data-preg="4" class="ejercicioVF_opciones clearfix" style="margin-bottom: 25px;">
                      <div class="enunciadoVF col-xs-12"><p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4.</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  I have heard there is a link between drinking milk and breast cancer. Is that true:</font></font></p></div>
                              <div class="row-fluid opcionesRadio" style="text-align: left;">
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios3" value="success" onclick="marcar(this)" id="btn3.1">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> True</font></font></span>
                                    
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios3" value="fail" onclick="marcar(this)" id="btn3.2">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> False</font></font></span>
                                   
                                  </label>
                              </div>
                          </div>
                           <div data-preg="5" class="ejercicioVF_opciones clearfix" style="margin-bottom: 25px;">
                      <div class="enunciadoVF col-xs-12"><p><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5.</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The story of tobacco research sounds a lot like what is happening today with the oil industry and global warming. Do you agree:</font></font></p></div>
                              <div class="row-fluid opcionesRadio" style="text-align: left;">
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios3" value="success" onclick="marcar(this)" id="btn3.1">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Yes</font></font></span>
                                    
                                  </label>
                                  <label class="radioejer col-xs-12 ">
                                    <input type="radio" name="optionsRadios3" value="fail" onclick="marcar(this)" id="btn3.2">
                          <span><span class="letraRespuesta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> No</font></font></span>
                                   
                                  </label>
                              </div>
                          </div>
              
              
                      </div>
                                    </div><!-- item -->
                                    </div><!-- item -->
                              </div><!-- carousel-inner -->                             
                        </div>                       
                    </div>
                    <footer>
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">

                                <div class="navbar-header">
                                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </nav>
                         <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="sr-only">Next</span>
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            
                          </a>
                    </footer>    
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () 
             {       
                // $(".carousel-control.left").hover(function(){
                //   $(".carousel-control.left .sr-only").css("width", "auto");
                //   });
                // $(".carousel-control.right").hover(function(){
                //     $(".carousel-control.right .sr-only").css("width", "auto");
                //   });    
                // $(".carousel-control.left").mouseleave(function(){
                //   $(".carousel-control.left .sr-only").css("width", "0");
                //   });
                // $(".carousel-control.right").mouseleave(function(){
                //     $(".carousel-control.right .sr-only").css("width", "0");
                //   });          
                if($(".banner").hasClass("active"))
                 {
                    $(".carousel-control.left").hide();
                 }
                 else
                 {
                    $(".carousel-control.left").show();
                 }          
                $('#myCarousel').on('slid.bs.carousel', function () 
                {
                      if($(".block ").hasClass("active"))
                      {
                        $(".block > div > div").css( "opacity", "1" );
                      }
                      else
                      {
                        $(".block > div > div").css( "opacity", "0" );
                      }               
                      if($(".banner").hasClass("active"))
                      {
                        $(".carousel-control.left").hide();
                      }
                      else
                      {
                        $(".carousel-control.left").show();
                      } 
                      if($(".quiz").hasClass("active"))
                      {
                        $(".carousel-control.right").hide();
                      }
                      else
                      {
                        $(".carousel-control.right").show();
                      } 
                 });

                $('#myCarousel').carousel({
                    pause: true,
                    interval: false
                    });
                    $('.flip').hover(function(){
                    $(this).find('.card').toggleClass('flipped');
                    });
                     $('#sidebarCollapse').on('click', function () {
                         $('#sidebar').toggleClass('active');
                         $('#content').toggleClass('shrink');
                         $('header').toggleClass('shrink');
                         $(this).toggleClass('active');
                     });
                 });
         </script>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Result</h4>
        </div>
        <div class="modal-body">
          <table class="table text-center">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Count</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Questions</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>Answers</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>Result</td>
                  <td>3</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </body>
</html>
