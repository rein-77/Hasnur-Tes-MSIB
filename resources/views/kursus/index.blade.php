<x-sidebar>

  <div class="w3-half w3-light-grey w3-container" style="height:100vh">
    <div class="w3-padding-64 w3-center">
      <h1>Kursus</h1>
      <div class="w3-left-align w3-padding-large">

      <a class="w3-button w3-round w3-light-green" href="{{ route('kursus.create') }}">New Kursus</a>

        @foreach ( $kursus as $itemkursus )
        <h2> <a href="{{ route('kursus.show', $itemkursus->id) }}"> {{ $itemkursus-> nama }}</a></h2>
        <p>{{ $itemkursus-> deskripsi }}</p>
        <p>{{ $itemkursus-> durasi }}</p>
        @endforeach

        {{ $kursus->links('vendor/pagination/simple-default') }}
      </div>
    </div>
  </div>
  </div>

</x-sidebar>