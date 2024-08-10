<x-sidebar>

  <div class="w3-half w3-dark-grey w3-container" style="height:100vh">
    <div class="w3-padding-64 w3-center">
      <h1>Materi</h1>
      <div class="w3-left-align w3-padding-large">

        <a class="w3-button w3-round w3-light-green" href="{{ route('materi.create') }}">New Materi</a>

        @foreach ( $materid as $materi )
        <h2>
          <li><a href="{{ route('materi.show', $materi->id, ) }}"> {{ $materi-> judul }}</a></li>
        </h2>

        @endforeach
      </div>
    </div>
  </div>
  </div>

</x-sidebar>