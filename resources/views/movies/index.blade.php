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

 <div class="container-fluid">
    <div class="row">
        @foreach($shows as $show)
        <div class="col-sm-4">

            <div class="card " style="margin-top: 15px;background-image: url('https://i0.wp.com/saintpolicesystems.com/wp-content/uploads/2018/06/blue-light-backgrounds-background-opera-image-graphics-community-speeddials.jpg?w=1440');">
                @if(!is_null($show->show->image))
                    <img src="{{ $show->show->image->original }}" alt="{{ $show->show->name }}" class="img-fluid img-thumbnail" width="209" height="279" style="margin:auto;">
                @else
                <img src="https://www.publicdomainpictures.net/pictures/280000/velka/not-found-image-15383864787lu.jpg"class="img-fluid img-thumbnail" >
                @endif
            <div class="card-block">
                <a href="{{ route('movies.show', $show->show->id) }}">
                    <h2 class="card-title">{{ $show->show->name }}</h2>
                </a>
                <!--
                @if(strlen($show->show->summary) > 0)
                    <div class="card-body">
                        <p class="card-text">{!! $show->show->summary !!}</p>
                    </div>
                @else
                        <p class="card-text" >Este show no tiene descripción. sdsd</p>
                    @endif
-->
            </div>
            
            <div class="card-block">
                <a href="{{ route('movies.show', $show->show->id) }}" class="card-link">Ver Descripción Completa</a>
            </div>
            </div>
                </div>
                @endforeach 
        </div>
  </div>
  
 </x-app-layout>
 <div class="container">
  <div class="cellphone-container">    
      <div class="movie">       
        <div class="menu"><i class="material-icons"></i></div>
        <div class="movie-img"></div>
        <div class="text-movie-cont">
          <div class="mr-grid">
            <div class="col1">
              <h1>Interstellar</h1>
              <ul class="movie-gen">
                <li>PG-13  /</li>
                <li>2h 49min  /</li>
                <li>Adventure, Drama, Sci-Fi,</li>
              </ul>
            </div>
          </div>
          <div class="mr-grid summary-row">
            <div class="col2">
              <h5>SUMMARY</h5>
            </div>
            <div class="col2">
               <ul class="movie-likes">
                <li><i class="material-icons">&#xE813;</i>124</li>
                <li><i class="material-icons">&#xE813;</i>3</li>
              </ul>
            </div>
          </div>
          <div class="mr-grid">
            <div class="col1">
              <p class="movie-description">A group of elderly people are giving interviews about having lived in a climate of crop blight and constant dust reminiscent of The Great 
              Depression of the 1930's. The first one seen is an elderly woman stating her father was a farmer, but did not start out that way. </p>
            </div>
          </div>
          <div class="mr-grid actors-row">
            <div class="col1">
              <p class="movie-actors">Matthew McConaughey, Anne Hathaway, Jessica Chastain</p>
            </div>
          </div>
          <div class="mr-grid action-row">
            <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH TRAILER</h3></div>
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
  </div>
</div>
<a href="https://dribbble.com/geehm" target="_blank">
  <img class="dribbble-link" src="https://image.flaticon.com/icons/png/512/124/124037.png">
</a>