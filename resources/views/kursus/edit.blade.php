<x-sidebar>


<form method="post" action="{{ route('kursus.update', $kursus) }}">
    @method('PATCH')
    <x-kursus.form :kursus="$kursus" />

</form>

</x-sidebar>
