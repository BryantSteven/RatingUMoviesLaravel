<x-guest-layout>

  <!-- Apartado Movie Detail -->
  <!-- <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('movies.show', $show->id) }}">
                    <h2>{{ $show->name }}</h2>
                </a>
                <img src="{{ $show->image->original }}" alt="{{ $show->name }}"width="209" height="279">
                <p>rating: {{ $show->rating->average }}</p>
                <p>{!! $show->summary !!}</p>
            </div>
        </div> -->

  <html>

  <head>
    <link rel="stylesheet" href="{{ URL::asset('css/moviedetail.css') }}">
  </head>

  <body>

    <div class="movie-card">

      <div class="container-fluid">


        <a href="#"><img src="{{ $show->image->original }}" alt="{{ $show->name }}" class="cover" width="209" height="279" style="border-radius: 15%;" /></a>

        <div class="hero">

          <div class="details">

            <div class="title1">{{ $show->name }} <span>PG-13</span></div>

            <div class="title2">Runtime: {{ $show->runtime }} Mins</div>

            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
              <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="star4" name="rating" value="4" checked /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
              <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
              <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
              <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
              <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>

            <span class="likes"> {{ $show->rating->average }} /10 </span>

          </div>

        </div>

        <div class="description">

          <div class="column1">
            <span class="tag">{!! $show->language !!}</span>
            <span class="tag">Estreno: {!! $show->premiered !!}</span>
            <span class="tag">{{$show->genres[1]}}</span>
          </div> <!-- end column1 -->
          <div class="column2">
            <p>{!! $show->summary !!} </p>
            <!-- end avatars -->
          </div> <!-- end column2 -->
        </div> <!-- end description -->

        <Form method="POST" action="{{ route('reviews.store') }}">
          @csrf
          <input type="text" placeholder="Que te pareció?... ¡ Escribe tu reseña de maximo 240 caracteres !" class="form-control" maxlength="240" name="content" autocomplete="off" style="margin-top: 10px;">
          <input type="hidden" value="{{$show->id}}" name="movie_id">
          <!-- <input type="Submit" value="Carga mi reseña!"> -->
          <button type="Submit" class="btn btn-primary" style="margin-top:10px">¡Carga mis reseña!</button>
        </Form>
        <div class="row">
          <div class="col">
            <h3 style="margin-top: 40px;font: INITIAL;font-size: 50px; color:white;">Reseñas de nuestros usuarios:</h3>
            @foreach($reviews as $review)
            <div>
              <!-- Aqui trae el nombre de quien hizo el review  -->
              <label class="label-info" style="font-size: 20px;"> El usuario {{ $review->user->name }} dejó una reseña:</label>
            </div>
            <div>
              <!-- Aqui trae la review -->
              <label class="label-info" style="color: white; margin-bottom:20px;font-size: 20px;">{{ $review->content }}.</label>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div> 
  </body>

  </html>
</x-guest-layout>