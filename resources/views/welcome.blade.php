<x-layout>

    @if(session('message'))

<div class="alert alert-primary alert-dismissible fade show fs-4 text-center" role="alert">
    {{session('message')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>   
@endif

<div class="container-fluid b-ground">
    <div class="row h-100 justify-content-center">
        <div class="col-6 h-100 my-5">
            <h1 class="text-center text-light">AutoSpace.it</h1>
            <h2 class="text-center text-light fs-1">" Le migliori auto in vendita a prezzi imbattibili "</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 h-100 my-5">
            <h2 class="text-center fs-1"><span class="fw-bold">Sezione articoli:</span><span> le nostre auto...</span></h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 my-5">
            <img id="b-img" src="/img/b-m2.jpg" alt="">
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <h3 class="fs-2 text-center fw-bold">Auto sportive</h3>
            <p class="fs-4 text-center">
                Ferrari, Lamborghini, Pagani, Maserati, Alfa Romeo, Bizzarrini, Iso rivolta e De Tomaso, solo per citare alcuni nomi che hanno fatto grande la tradizione italiana delle coupé sportive e delle "berlinette", sono i grandi maestri che oggi guidano l'esercito delle nuove startup italiane che vogliono produrre supercar.
            </p>
            <div class="text-center">
                <i class="fa-solid fa-car fs-2"></i>
            </div>
        </div>
        <div class="col-6 my-5">
            <img id="b-img" src="/img/b-m3.jpg" alt="">
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <h3 class="fs-2 text-center fw-bold">Berline</h3>
            <p class="fs-4 text-center">
                Una berlina è un'auto generalmente contraddistinta dalla presenza di tre volumi: a differenza dell'utilitaria, la berlina presenta anche il vano bagagli separato dall'abitacolo, così come lo è il vano motore.
            </p>
            <div class="text-center">
                <i class="fa-solid fa-car fs-2"></i>
            </div>
        </div>
        <div class="col-6 my-5">
            <img id="b-img" src="/img/b-m4.jpg" alt="">
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <h3 class="fs-2 text-center fw-bold">Suv</h3>
            <p class="fs-4 text-center">
                SUV è l'acronimo di Sport Utility Vehicle, tradotto letteralmente Veicolo Utilitario Sportivo in Italiano ed identifica macchine miste che combinano il pragmatismo di un'automobile con la robustezza tipica di un fuoristrada, da cui ereditano molte caratteristiche che vanno ben oltre la mera dimensione.
            </p>
            <div class="text-center">
                <i class="fa-solid fa-car fs-2"></i>
            </div>
        </div>
        <div class="col-6 my-5">
            <img id="b-img" src="/img/b-m5.jpg" alt="">
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <h3 class="fs-2 text-center fw-bold">Utilitarie</h3>
            <p class="fs-4 text-center">
                L'auto utilitaria è differente dalla berlina sia per quanto riguarda la definizione degli spazi (l'utilitaria infatti nasce come vettura a due volumi, la berlina a tre) sia in ambito di funzionalità e meccanica.
            </p>
            <div class="text-center">
                <i class="fa-solid fa-car fs-2"></i>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid box-cards">
    <div class="row h-100 justify-content-center">
        <h2 class="text-center fs-1"><span class="fw-bold">Shop online:</span><span> le nostre offerte</span></h2>

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

    </div>
</div>









</x-layout>