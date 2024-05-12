<!doctype html>
<html lang="pl" data-bs-theme="">
  @include('shared.head', ['pageTitle' => 'Wycieczki górskie'])
  <body>
    @include('shared.navbar')

    <div id="wycieczki" class="container mt-5">
        <div class="row">
          <h1>Wycieczka</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
              <img src="{{ asset('storage/img/' . $trip->img) }}" class="card-img-top" alt="{{ $trip->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $trip->name }}</h5>
                <p class="card-text">{{ $trip->description }}</p>
                <p>Kraj: {{ $trip->country->name }}</p>
                <p>Kontynent: {{ $trip->continent }}</p>
                <p>Okres: {{ $trip->period }} dni</p>
                <p>Cena: {{ $trip->price }} PLN</p>
              </div>
            </div>
        </div>
      </div>

    @include('shared.footer')
</html>
