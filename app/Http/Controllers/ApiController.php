<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\AgendaGallery;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $agendas = Agenda::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
        return response()->json([
            'status' => '200',
            'message' => 'List Schedule',
            'data' => $agendas
        ]);
    }

    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return response()->json([
            'status' => '200',
            'message' => 'Detail schedule id ' . $id,
            'data' => $agenda,
            'gallery' => $agenda->images ? $agenda->images : ''
        ]);
    }
}
