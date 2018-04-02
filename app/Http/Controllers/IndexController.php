<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\AgendaGallery;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $agendas = Agenda::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
        return view('welcome', compact('agendas'));
    }

    public function schedule()
    {
        $agendas = Agenda::where('status', 0)->orderBy('id', 'ASC')->get();
        return view('schedule', compact('agendas'));
    }
}