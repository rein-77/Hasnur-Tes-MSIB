<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveKursusRequest;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function index(){
        return view('kursus.index', [
            'kursus' => Kursus::orderBy('created_at')->paginate(3)
        ]);
    }

    // Create Kursus --start
    public function create (){
        return view('kursus.create');
    }

    public function store(SaveKursusRequest $request) {
        $kursus = Kursus::create($request->validated());
        return redirect()->route('kursus.index');
    }
    // Create Kursus --end


    // Show Kursus --start
    public function show(Kursus $kursus) {
    // Mengambil semua materi yang terkait dengan kursus yang diberikan
    $materi = $kursus->materi; 

    // Mengirimkan kursus dan materi ke view
    return view('kursus.show', compact('kursus', 'materi'));
    }
    // Show Kursus --end


    // Edit Kursus --start
    public function edit(Kursus $kursus){
        return view('kursus.edit', compact('kursus'));
    }

    public function update(SaveKursusRequest $request, Kursus $kursus)
    {
        $kursus->update($request->validated());
        return redirect()->route('kursus.index');
    }
    // Edit Kursus --end


    // Delete Kursus --start
    public function destroy(Kursus $kursus){
        $kursus->delete();

        return redirect() -> route('kursus.index');

    }
    // Delete Kursus --end
    

}
