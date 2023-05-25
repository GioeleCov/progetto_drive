<div class="card custom-card">
    <img src="{{$cardImg}}" class="card-img-top custom-imgCard" alt="...">
    <div class="card-body">
      <h5 class="card-title fw-bold fs-2">{{$cardName}}</h5>
      <p class="card-text fs-3">Casa: {{$cardBrand}}</p>
      <p class="card-text fs-4">Genere: {{$cardGenre}}</p>
      <p class="card-text fs-4">Anno: {{$cardYear}}</p>
      <p class="card-text fs-4">Prezzo: {{$cardPrice}}$</p>
      <a href="{{route('car.show', $cardId)}}" class="butt-custom fs-4">Scopri di più</a>
    </div>
  </div>