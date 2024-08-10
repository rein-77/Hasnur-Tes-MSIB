<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveKursusRequest;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Http\Requests\SaveMateriRequest;
use App\Models\Kursus;

class MateriController extends Controller
{
    public function index()
    {
        return view('materi.index', [
            'materid' => Materi::orderBy('created_at')->paginate(3)
        ]);
    }

    // Create Materi --start
    public function create()
    {

        return view('materi.create', [
            'kursud' => Kursus::all()
        ]);
    }

    public function store(SaveMateriRequest $request)
    {
        $materi = Materi::create($request->validated());
        return redirect()->route('materi.index');
    }
    // Create Materi --end


    // Show Materi --start
    public function show(Materi $materi)
    {
        $kursus = $materi->kursus;
        $materi->link_embed = str_replace(
            'https://www.youtube.com/watch?v=',
            'https://www.youtube.com/embed/',
            $materi->link_embed
        );
        $materi->link_embed = str_replace(
            'https://youtu.be/',
            'https://www.youtube.com/embed/',
            $materi->link_embed
        );
        return view('materi.show', compact('kursus', 'materi'));
    }
    // Show Materi --end


    // Edit Materi --start
    public function edit(Materi $materi)
    {

        return view('materi.edit', [
            'materi' => $materi,
            'kursud' => Kursus::all()
        ]);
    }

    public function update(SaveMateriRequest $request, Materi $materi)
    {
        $materi->update($request->validated());
        return redirect()->route('materi.index');
    }
    // Edit Materi --end


    // Delete Materi --start
    public function destroy(Materi $materi)
    {
        $materi->delete();

        return redirect()->route('materi.index');
    }
    // Delete Materi --end
}
