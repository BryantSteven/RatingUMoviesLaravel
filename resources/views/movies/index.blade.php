<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  <!--  <div class="container">
        <div class="row">
            @foreach($shows as $show)
            <div class="" >
                <div class="card card-hotel ml-2 col-sm-3 d-flex flex-column justify-content-between margin_top margin_right" style="width: 70rem;">
                    <div>
                    <a href="{{ route('movies.show', $show->show->id) }}">
                        <h2>{{ $show->show->name }}</h2>
                    </a>
                    </div>
                    @if(!is_null($show->show->image))
                    <img src="{{ $show->show->image->original }}" alt="{{ $show->show->name }}" class="img-fluid img-thumbnail" width="209" height="279" style="margin:auto;">
                    @else
                    <img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg"class="img-fluid img-thumbnail" >
                    @endif
                    @if(strlen($show->show->summary) > 0)
                    <div class="card-body">
                    <p class="">{!! $show->show->summary !!}</p>
                    </div>
                    @else
                    <p>Este show no tiene descripción. sdsd</p>
                    @endif
                
                </div>
            </div>
            @endforeach
        </div>
    </div>
    -->

  <!-- <div class="container-fluid">
    <div class="row">
      @foreach($shows as $show)
      <div class="col-sm-4">

        <div class="card " style="margin-top: 15px;background-image: url('https://i0.wp.com/saintpolicesystems.com/wp-content/uploads/2018/06/blue-light-backgrounds-background-opera-image-graphics-community-speeddials.jpg?w=1440');">
          @if(!is_null($show->show->image))
          <img src="{{ $show->show->image->original }}" alt="{{ $show->show->name }}" class="img-fluid img-thumbnail" width="209" height="279" style="margin:auto;">
          @else
          <img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg" class="img-fluid img-thumbnail">
          @endif
          <div class="card-block">
            <a href="{{ route('movies.show', $show->show->id) }}">
              <h2 class="card-title">{{ $show->show->name }}</h2>
            </a>
           
                @if(strlen($show->show->summary) > 0)
                    <div class="card-body">
                        <p class="card-text">{!! $show->show->summary !!}</p>
                    </div>
                @else
                        <p class="card-text" >Este show no tiene descripción. sdsd</p>
                    @endif -->

          <!-- </div> -->

          <!-- <div class="card-block">
            <a href="{{ route('movies.show', $show->show->id) }}" class="card-link">Ver Descripción Completa</a>
          </div> -->
        <!-- </div>
      </div>
      

      @endforeach
    </div>
  </div> -->
  <html>
  <head>
    <link rel="stylesheet" href="{{ URL::asset('css/movie-card.css') }}">
  </head>

  <body>
  <div class="container">
  <div class="row">
  @foreach($shows as $show)
  <div class="col-sm-4">
      <div class="movie">       
        <div class="menu"></div>
          <div class="">
              <img class="movie-img" style="background-image: url({{ $show->show->image->original }})">
          </div>
          <div class="text-movie-cont">
            <div class="mr-grid">
              <div class="col1">
                <h1>{{ $show->show->name }}</h1>
                <ul class="movie-gen">
                  <li>PG-13  /</li>
                  <li>{{ $show->show->runtime }}</li>
                  
                </ul>
              </div>
            </div>
            <div class="mr-grid summary-row">
              <div class="col2">
                <h5>descripcion</h5>
              </div>
              <div class="col2">
                <ul class="movie-likes">
                  <li><i class="material-icons">&#xE813;</i>124</li>
                  <li><i class="material-icons">&#xE813;</i>3</li>
                </ul>
              </div>
            </div>
            <div class="mr-grid">
            @if(strlen($show->show->summary) > 0)
              <div class="col1">
                <p class="movie-description">{!! $show->show->summary !!}</p>
              </div>
              @else 
              <p class="card-text" >Este show no tiene descripción. sdsd</p>
                    @endif
            </div>
            
            <div class="mr-grid action-row">
              <div class="col2"><div class="watch-btn"><h3><a href="{{ route('movies.show', $show->show->id) }}"><i class="material-icons">&#xE037;</i>Ver Detalle</a></h3></div>
              </div>
              <div class="col6 action-btn"><i class="material-icons">&#xE161;</i>
              </div>
              <div class="col6 action-btn"><i class="material-icons">&#xE866;</i>
              </div>
              <div class="col6 action-btn"><i class="material-icons">&#xE80D;</i>
              </div>
            </div>
          </div>
        </div>
 <!-- </div>
</div>-->
  
    </div>
    @endforeach
  </div>
</div>
</body>
</html>
</x-app-layout>
