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
                              <h1>Your Gamelist</h1>
                              <a href="{{ url('random-game') }}" class="btn-lg btn-primary">Discover new games...</a>
                              <ul class="countdown">
                                  <table id="game-table" class="display">
                                    <thead>
                                      <tr style="color: white;">
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Genre</th>
                                        <th>Is it Cool?</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if( !empty($games) )
                                          @foreach($games as $value)
                                            <tr>
                                              <td>
                                                <img src="{{ $value->thumbnail }}" alt="">
                                              </td>
                                              <td>{{ $value->title }}</td>
                                              <td>{{ $value->genre }}</td>
                                              <td style="align-content: center;">{{ $value->short_description }}</td>
                                              <td> <a href="{{ $value->game_url }}" target="_blank" class="btn-lg btn-primary">Link</a></td>
                                              <td>
                                                <form method="POST" action="{{ route('delete-game') }}">
                                                  <input type="hidden" name="id" value="{{ $value->id }}">
                                                  {!! csrf_field() !!}
                                                  <button class="btn-lg btn-danger">Delete</button>
                                                </form>
                                            </tr>
                                          @endforeach
                                      @else
                                          <tr>
                                              <td colspan="2"> No record found </td>
                                              <td colspan="2"> No record found </td>
                                              <td colspan="2"> No record found </td>
                                              <td colspan="2"> No record found </td>
                                              <td colspan="2"> No record found </td>
                                          </tr>
                                      @endif
                                    </tbody>
                                  </table>
                              </ul>
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