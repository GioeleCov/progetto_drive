<x-layout>


<div class="container-fluid p-5" id="bg-det">
    <div class="row">
        <div class="col-5 vh-100 d-flex justify-content-center flex-column">
            <h2 class="fs-1 d-flex justify-content-center">{{$car['name']}}</h2>
            <img class="h-50" src="{{$car['img']}}" alt="">
        </div>
        <div class="col-6 d-flex justify-content-center flex-column">
            <p class="fs-3">
                {{$car['description']}}
            </p>
        </div>
    </div>
</div>





</x-layout>