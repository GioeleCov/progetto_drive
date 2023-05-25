
<x-layout> 

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="fs-1">Risultati di ricerca per: <span><em>{{$chiaveRicerca}}</em></span></h2>
            </div>
        </div>
    </div>

    <div class="container-fluid box-cards">
        <div class="row h-100 justify-content-center">

            @if (count($cars) > 0)
    
            @foreach ($cars as $car)

            <div class="col-4 h-100 my-5">
              <x-cards 
              cardName="{{$car['name']}}"
              cardBrand="{{$car['brand']}}"
              cardYear="{{$car['year']}}"
              cardGenre="{{$car['genre']}}"
              cardPrice="{{$car['price']}}"  
              cardImg="{{$car['img']}}"
              cardId="{{$car['id']}}"  
              />
            </div>
    
            @endforeach

            @else

            <div class="alert alert-primary" role="alert">
                <p class="fs-2 text-center text-dark">Non ci sono risultati</p>
            </div>
            
            @endif
        </div>
    </div>














</x-layout>