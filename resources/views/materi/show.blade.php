<x-sidebar>

    <div class="w3-half w3-dark-grey w3-container" style="height:100vh">
        <div class="w3-padding-64 w3-center">
            <h1>Materi {{ $materi-> judul }}</h1>
            <div class="w3-left-align w3-padding-large">


                <h2>Deskripsi</h2>
                <p>{{ $materi->deskripsi }}</p>

                <h2>Kursus Terkait</h2>
                <p><strong>Judul Kursus:</strong> {{ $kursus->nama }}</p>
                <p><strong>Deskripsi Kursus:</strong> {{ $kursus->deskripsi }}</p>
                
                <h2>Link</h2>

                <div>
                    <iframe width="560" height="315" src="{{ $materi->link_embed }}" frameborder="0" allowfullscreen></iframe>
                </div>
     

                <a class="w3-button w3-round w3-yellow" href="{{ route('materi.edit', $materi -> id) }}">Edit</a>
                <form style="margin-top: 10px;" method="post" action="{{ route('materi.destroy', $materi) }}">
                    @csrf
                    @method('DELETE')

                    <button class="w3-light-red w3-hover">Hapus</button>

                </form>
            </div>
        </div>
    </div>
    </div>

</x-sidebar>