<x-layout>
    
    <div class="container b-form p-5 my-5">
        <div class="row my-5">
            <h2 class="fs-1">Pagina Contatti</h2>
            <p class="fs-2">Inviaci un'email</p>
            <div class="col-5">
                <form method="Post" action="{{route ('contact.send')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="tuonome" class="form-label fs-3">Tuo Nome</label>
                        <input type="text" class="form-control fs-4" name="tuonome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="object" class="form-label fs-3">Oggetto</label>
                        <input type="text" class="form-control fs-4" name="object" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="messages" class="form-label fs-3">Messaggio</label>
                        <textarea name="messages" class="form-control fs-4" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark fs-4 w-25">Invia</button>
                </form>
            </div>
        </div>
    </div>
 
    
</x-layout>