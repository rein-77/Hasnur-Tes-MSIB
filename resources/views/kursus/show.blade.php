<x-sidebar>
    <div class="w3-half w3-light-grey w3-container" style="height:100vh">
        <div class="w3-padding-64 w3-center">
            <h1>Kursus {{ $kursus->nama }}</h1>
            <div class="w3-left-align w3-padding-large">

                <h2>Deskripsi</h2>
                <p>{{ $kursus->deskripsi }}</p>

                <h2>Durasi Belajar</h2>
                <p> {{ $kursus->durasi }}</p>

                <h2>Materi Kursus</h2>
                
                @if($materi->isEmpty())
                <p>Tidak ada materi untuk kursus ini.</p>
                @else
                <p>Silakan memilih materi kursus yang ingin anda pelajari.</p>
                <ul>
                    @foreach ($materi as $item)
                    <li>
                        <a class="w3-text-black" href="{{ route('materi.show', $item->id) }}" ><strong>{{ $item->judul }}</strong></a>
                    </li>
                    @endforeach
                </ul>
                @endif

                <a class="w3-button w3-round w3-yellow" href="{{ route('kursus.edit', $kursus -> id) }}">Edit</a>
                <form style="margin-top: 10px;" method="post" action="{{ route('kursus.destroy', $kursus) }}">
                    @csrf
                    @method('DELETE')

                    <button class="w3-red">Hapus</button>

                </form>


            </div>
        </div>
    </div>
    </div>
</x-sidebar>