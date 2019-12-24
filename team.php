<?php include_once 'nav.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  </head>
  <body class="back">
    
    <div class="container">
      <!-- <div id="jumb" class="jumbotron animated flip"> -->

        <h1 class="text-center animated flip" id="h"><i class="fas fa-users"></i> TEAM</h1>
      <!-- </div> -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        	<br />

          
            	<button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName1" aria-hidden="true">
            		Core Team
            	</button>
              <button type="button" class="btn btn-primary animated slideInLeft" id="size" data-toggle="modal" data-target="#ModelName2" aria-hidden="true">
                Planning and Development
              </button>
              
          
              <button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName3" aria-hidden="true">
                Corporate Affairs
              </button>
              <button type="button" class="btn btn-primary animated slideInLeft" id="size" data-toggle="modal" data-target="#ModelName4" aria-hidden="true">
                Public Relations
              </button>
              
          
              <button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName5" aria-hidden="true">
                Event Management
              </button>
              <button type="button" class="btn btn-primary animated slideInLeft" id="size" data-toggle="modal" data-target="#ModelName6" aria-hidden="true">
                Hospitality
              </button>
              
          
              <button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName7" aria-hidden="true">
                Logistics
              </button>
              <button type="button" class="btn btn-primary animated slideInLeft" id="size" data-toggle="modal" data-target="#ModelName8" aria-hidden="true">
                Digital Public Relations
              </button>
              
          
              <button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName9" aria-hidden="true">
                Application and Web Developers
              </button>
              <button type="button" class="btn btn-primary animated slideInLeft" id="size" data-toggle="modal" data-target="#ModelName10" aria-hidden="true">
                Media Relations
              </button>
              
          
              <button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName11" aria-hidden="true">
                Creative Team
              </button>
              <button type="button" class="btn btn-primary animated slideInLeft" id="size" data-toggle="modal" data-target="#ModelName12" aria-hidden="true">
                Robotics
              </button>
              
          
              <button type="button" class="btn btn-primary animated lightSpeedIn" id="size" data-toggle="modal" data-target="#ModelName13" aria-hidden="true">
                Decoration Team
              </button>
              
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName1" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header" id="head">
    				<button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					<span class="sr-only">Close</span>
    				</button>

    				<h2 class="modal-title col-sm-8" id="ModelNameLabel">Core Team</h2>
    			</div>

    			<div class="modal-body">
    				<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
    			</div>

    			<div class="modal-footer">
    				<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
    				<!-- <button type="button" class="btn btn-primary">Extra button</button> -->
    			</div>
    		</div>
    	</div>
    </div>

    <div class="modal fade" id="ModelName2" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Planning and Development</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName3" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Corporate Affairs</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName4" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Public Relations</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic4" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName5" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Event Management</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic5" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic5" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic5" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName6" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Hospitality</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic6" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic6" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic6" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName7" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Logistics</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic7" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic7" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic7" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName8" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Digital Public Relations</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic8" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic8" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic8" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName9" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Application and Web Developers</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic9" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic9" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic9" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName10" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Media Relations</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic10" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic10" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic10" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName11" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Creative Team</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic11" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic11" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic11" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName12" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Robotics</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic12" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic12" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic12" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModelName13" tabindex="-1" role="dialog" aria-labelledby="ModelNameLabel" aria=hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" id="head">
            <button type="button" id="cls" class="close col-sm-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>

            <h2 class="modal-title col-sm-8" id="ModelNameLabel">Decoration Team</h2>
          </div>

          <div class="modal-body">
            <div id="carousel-example-generic13" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="First Slide">
                                      <div class="card-body">
                                        <h3 class="color">Sai Nikhil</h3>
                                        <p>Joint Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Second Slide">
                                      <div class="card-body">
                                        <h3 class="color">Atul Sagar</h3>
                                        <p>Technical Secretary</p>
                                      </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="card">
                                      <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Third Slide">
                                      <div class="card-body">
                                        <h3 class="color">K. Raja</h3>
                                        <p>Spokesperson</p>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-example-generic13" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel-example-generic13" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Extra button</button> -->
          </div>
        </div>
      </div>
    </div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
  </body>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    new WOW().init();
</script>
</html>
