<head>

  <title>Free Games!</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/vegas.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-style.css">
      
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    
</head>
<body>

    <!-- PRE LOADER -->
     <section class="preloader">
         <div class="spinner">
              <span class="spinner-rotate"></span>
         </div>
    </section>


    <!-- HOME -->
    <section id="home">
       <div class="overlay"></div>
         <div class="container">
              <div class="row">

                   <div class="col-md-12 col-sm-12">
                        <div class="home-info">
                             <a href="{{ url('game-list') }}" class="btn-lg btn-primary">My gamelist...</a>
                             <h1>Check this free game!</h1>
                             <ul class="countdown" style="padding: -4px;">
                                 <li>
                                  <div class="card" style="width: 36rem; background-color: rgba(0,0,0,.75); border-radius: 10%; padding:8px; border:1px solid white;">
                                    <img class="card-img-top" src="{{ $game->thumbnail }}" alt="{{ $game->title }}" style="width: 28rem; border-radius: 20%; border:1px dotted white;">
                                    <div class="card-body">
                                      <h1 class="card-title">{{ $game->title }}</h1>
                                      <p class="card-text" style="color: white;">{{ $game->short_description }}</p>
                                        <div class="container">
                                          <div class="row">
                                              <div class="col-xs-6">
                                                <a href="{{ $game->game_url }}" target="_blank" class="btn btn-primary">Go to Page</a>
                                              </div>
                                              <div class="col-xs-6">
                                                
                                                <form method="POST" action="{{ route('save-game') }}">
                                                  <input type="hidden" name="game[]" value="{{ json_encode($game) }}">
                                                  {!! csrf_field() !!}
                                                  <button class="btn btn-danger">Add to List</button>
                                                </form>

                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </li>
                             </ul>
                             <a onclick='window.location.reload(true);' class="btn-lg btn-warning" style="cursor: pointer;">Check Another Game!</a>
                        </div>
                   </div>

              </div>
         </div>
    </section>

    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/table.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/init.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>