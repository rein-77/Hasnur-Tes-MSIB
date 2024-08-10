<div class="w3-half w3-blue-grey w3-container" style="height:100vh">
    <div class="w3-padding-64 w3-center">
    
        <h1>Kursus {{ $kursus->nama ?? '' }}</h1>
        <div class="w3-left-align w3-padding-large">
            <x-errors/>
            @csrf
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama"
                value="{{ old('nama', $kursus->nama ?? '') }}">
      
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi">{{ old('deskripsi', $kursus->deskripsi ?? '') }}</textarea>

            <label for="durasi">Durasi</label>
            <input type="text" name="durasi" id="durasi" value="{{ old('durasi', $kursus->durasi ?? '') }}">
            
            <button class="w3-hover-black  w3-light-green" style="margin-top:15px">Save</button>
            <a class="w3-button w3-round w3-light-grey" href="{{ route('kursus.index') }}">Kembali</a>

        </div>
    </div>
</div>
</div>