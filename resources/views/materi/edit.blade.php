<x-sidebar>
<form method="post" action="{{ route('materi.update', $materi) }}">
@method('PATCH')
<div class="w3-half w3-pale-blue w3-container" style="height:100vh">
    <div class="w3-padding-64 w3-center">
    
        <h1>Materi {{ $materi->judul ?? '' }}</h1>
        <div class="w3-left-align w3-padding-large">
            <x-errors/>
            @csrf

            <label for="kursus_id">Kursus</label>
            <select name="kursus_id" id="kursus_id">

            @foreach ( $kursud as $kursus )
                <option value="{{ $kursus->id }}" {{ old('kursus_id') == $kursus->id ? 'selected' : '' }}> {{$kursus->nama}} </option>
            @endforeach

            </select>

            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul"
            value="{{ old('judul', $materi->judul ?? '') }}">


            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi">{{ old('deskripsi', $materi->deskripsi ?? '') }}</textarea>

            <label for="link_embed">Link Materi</label>
            <textarea name="link_embed" id="link_embed">{{ old('link_embed', $materi->link_embed ?? '') }}</textarea>
        
              <button class="w3-hover-black  w3-light-green" style="margin-top:15px">Save</button>  

            <a class="w3-button w3-round w3-light-grey" href="{{ route('materi.index') }}">Kembali</a>

        </div>
    </div>
</div>
</div>
</form>
</x-sidebar>



