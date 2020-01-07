<?php include_once 'nav.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
    background-color:#f5f8fd;
        }

        #h {
            margin-top: 20px;
            margin-bottom: 38px;
            font-weight: bolder;
            font-size: 2.8rem;
            color: black;
            font-family: 'Play', sans-serif;
        }

        #modbtn {
            width: 100%;
            margin: auto;
            border-radius: 20px;
            color: black;
            background-image:linear-gradient(to right, #3366ff -7%, #00ffff 100%);;
            font-size: 1.5rem;
            margin-bottom: 20px;
            min-height: 70px;
        }

        .modal-title {
            color: black;
            font-weight: bolder;
            font-size: 1.5rem;
        }

        #closed {
            color: black;
        }

        .carousel-indicators {
            transform: translateY(58px);
            width: 63%;
        }

        .btn-secondary {
            transform: translateY(10px);
            background-color: #20e4db;
        }

        .close {
            width: 20%;
        }

        .modal-content {
            background-color: black;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <title>Team|OJASS'20</title>
</head>
<body><br><br><br><br>
    <div class="container">
   <center> <img src ="svg/team.svg" width ="200" height ="20"></center><br>
            <!-- <h1 class="text-center animated fadeIn" id="h"><u>Team</u></h1> -->
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter1">
            Core Team
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Core Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span id="closed" aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                            <!-- <div class="carousel-caption">
                            <h5>First slide label</h5>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                            <!-- <div class="carousel-caption">
                            <h5>Second slide label</h5>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                            <!-- <div class="carousel-caption">
                            <h5>Third slide label</h5>
                            </div> -->
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</!-->
                </div>
            </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter2">
                Planning & Development
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Planning & Development</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span id="closed" aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                <!-- <div class="carousel-caption">
                                <h5>First slide label</h5>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                <!-- <div class="carousel-caption">
                                <h5>Second slide label</h5>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                <!-- <div class="carousel-caption">
                                <h5>Third slide label</h5>
                                </div> -->
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
                </div>
            </div>
        
            <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter3">
                    Corporate Affairs
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Corporate Affairs</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span id="closed" aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleCaptions3" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions3" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions3" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions3" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                    <!-- <div class="carousel-caption">
                                    <h5>First slide label</h5>
                                    </div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                    <!-- <div class="carousel-caption">
                                    <h5>Second slide label</h5>
                                    </div> -->
                                </div>
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                    <!-- <div class="carousel-caption">
                                    <h5>Third slide label</h5>
                                    </div> -->
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                    </div>
                </div>
                
                <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter4">
                        Public Relations
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Public Relations</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span id="closed" aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div id="carouselExampleCaptions4" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions4" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions4" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleCaptions4" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                        <!-- <div class="carousel-caption">
                                        <h5>First slide label</h5>
                                        </div> -->
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                        <!-- <div class="carousel-caption">
                                        <h5>Second slide label</h5>
                                        </div> -->
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                        <!-- <div class="carousel-caption">
                                        <h5>Third slide label</h5>
                                        </div> -->
                                    </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions4" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions4" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter5">
                            Event Management
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Event Management</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span id="closed" aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselExampleCaptions5" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions5" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCaptions5" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCaptions5" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                            <!-- <div class="carousel-caption">
                                            <h5>First slide label</h5>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                            <!-- <div class="carousel-caption">
                                            <h5>Second slide label</h5>
                                            </div> -->
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                            <!-- <div class="carousel-caption">
                                            <h5>Third slide label</h5>
                                            </div> -->
                                        </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions5" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions5" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                </div>
                            </div>
                            </div>
                        </div>
                        

                        <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter6">
                                Hospitality
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Hospitality</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span id="closed" aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="carouselExampleCaptions6" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleCaptions6" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleCaptions6" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleCaptions6" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                <!-- <div class="carousel-caption">
                                                <h5>First slide label</h5>
                                                </div> -->
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                <!-- <div class="carousel-caption">
                                                <h5>Second slide label</h5>
                                                </div> -->
                                            </div>
                                            <div class="carousel-item">
                                                <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                <!-- <div class="carousel-caption">
                                                <h5>Third slide label</h5>
                                                </div> -->
                                            </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleCaptions6" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleCaptions6" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                                </div>
                            </div>
                    
                            <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter7">
                                    Logistics
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Logistics</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span id="closed" aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleCaptions7" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleCaptions7" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleCaptions7" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleCaptions7" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                    <!-- <div class="carousel-caption">
                                                    <h5>First slide label</h5>
                                                    </div> -->
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                    <!-- <div class="carousel-caption">
                                                    <h5>Second slide label</h5>
                                                    </div> -->
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                    <!-- <div class="carousel-caption">
                                                    <h5>Third slide label</h5>
                                                    </div> -->
                                                </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions7" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions7" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter8">
                                        Digital Public Relations
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Digital Public Relations</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span id="closed" aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleCaptions8" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleCaptions8" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleCaptions8" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleCaptions8" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                        <!-- <div class="carousel-caption">
                                                        <h5>First slide label</h5>
                                                        </div> -->
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                        <!-- <div class="carousel-caption">
                                                        <h5>Second slide label</h5>
                                                        </div> -->
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                        <!-- <div class="carousel-caption">
                                                        <h5>Third slide label</h5>
                                                        </div> -->
                                                    </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleCaptions8" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleCaptions8" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter9">
                                            Application & Web Developers
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Application & Web Developers</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span id="closed" aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="carouselExampleCaptions9" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleCaptions9" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleCaptions9" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleCaptions9" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                            <!-- <div class="carousel-caption">
                                                            <h5>First slide label</h5>
                                                            </div> -->
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                            <!-- <div class="carousel-caption">
                                                            <h5>Second slide label</h5>
                                                            </div> -->
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                            <!-- <div class="carousel-caption">
                                                            <h5>Third slide label</h5>
                                                            </div> -->
                                                        </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleCaptions9" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleCaptions9" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter10">
                                                Media Relations
                                            </button>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Media Relations</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span id="closed" aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="carouselExampleCaptions10" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleCaptions10" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleCaptions10" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleCaptions10" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                <!-- <div class="carousel-caption">
                                                                <h5>First slide label</h5>
                                                                </div> -->
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                <!-- <div class="carousel-caption">
                                                                <h5>Second slide label</h5>
                                                                </div> -->
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                <!-- <div class="carousel-caption">
                                                                <h5>Third slide label</h5>
                                                                </div> -->
                                                            </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleCaptions10" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleCaptions10" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter11">
                                                    Creative Team
                                                </button>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Creative Team</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span id="closed" aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="carouselExampleCaptions11" class="carousel slide" data-ride="carousel">
                                                                <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleCaptions11" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleCaptions11" data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleCaptions11" data-slide-to="2"></li>
                                                                </ol>
                                                                <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                    <!-- <div class="carousel-caption">
                                                                    <h5>First slide label</h5>
                                                                    </div> -->
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                    <!-- <div class="carousel-caption">
                                                                    <h5>Second slide label</h5>
                                                                    </div> -->
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                    <!-- <div class="carousel-caption">
                                                                    <h5>Third slide label</h5>
                                                                    </div> -->
                                                                </div>
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carouselExampleCaptions11" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExampleCaptions11" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                        
                                                <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter12">
                                                        Robotics
                                                    </button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Robotics</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span id="closed" aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div id="carouselExampleCaptions12" class="carousel slide" data-ride="carousel">
                                                                    <ol class="carousel-indicators">
                                                                    <li data-target="#carouselExampleCaptions12" data-slide-to="0" class="active"></li>
                                                                    <li data-target="#carouselExampleCaptions12" data-slide-to="1"></li>
                                                                    <li data-target="#carouselExampleCaptions12" data-slide-to="2"></li>
                                                                    </ol>
                                                                    <div class="carousel-inner">
                                                                    <div class="carousel-item active">
                                                                        <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                        <!-- <div class="carousel-caption">
                                                                        <h5>First slide label</h5>
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                        <!-- <div class="carousel-caption">
                                                                        <h5>Second slide label</h5>
                                                                        </div> -->
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                        <!-- <div class="carousel-caption">
                                                                        <h5>Third slide label</h5>
                                                                        </div> -->
                                                                    </div>
                                                                    </div>
                                                                    <a class="carousel-control-prev" href="#carouselExampleCaptions12" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselExampleCaptions12" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="button" class="btn btn-primary btn-lg" id="modbtn" data-toggle="modal" data-target="#exampleModalCenter13">
                                                            Decoration Team
                                                        </button>
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Decoration Team</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span id="closed" aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="carouselExampleCaptions13" class="carousel slide" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                        <li data-target="#carouselExampleCaptions13" data-slide-to="0" class="active"></li>
                                                                        <li data-target="#carouselExampleCaptions13" data-slide-to="1"></li>
                                                                        <li data-target="#carouselExampleCaptions13" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner">
                                                                        <div class="carousel-item active">
                                                                            <img src="https://images.unsplash.com/photo-1571850131617-94a231a7185e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                            <!-- <div class="carousel-caption">
                                                                            <h5>First slide label</h5>
                                                                            </div> -->
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="https://images.unsplash.com/photo-1571851569031-28d9cc5ffae9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                            <!-- <div class="carousel-caption">
                                                                            <h5>Second slide label</h5>
                                                                            </div> -->
                                                                        </div>
                                                                        <div class="carousel-item">
                                                                            <img src="https://images.unsplash.com/photo-1571805423089-2b6c0e9284c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="#">
                                                                            <!-- <div class="carousel-caption">
                                                                            <h5>Third slide label</h5>
                                                                            </div> -->
                                                                        </div>
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#carouselExampleCaptions13" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#carouselExampleCaptions13" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <!-- <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button> -->
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                
        
    </div>
    

<?php include_once 'footer2.php';?>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    new WOW().init();
</script>
</body>
</html>

