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
        $agendas = Agenda::where('status', 0)->orderBy('date_start', 'ASC')->orderBy('clock_start', 'ASC')->get();
        return view('schedule', compact('agendas'));
    }

    public function scheduleCheck()
    {
        $dateNow = date('Y-m-d');
        $agendas = Agenda::where('date_end', $dateNow)->where('status',0)->get();
        
        foreach ($agendas as $agenda) {
            $agenda->update([
                'status' => 1,
            ]);
            $agenda->images()->create([
                'path' => 'dkis-logo.png'
            ]);
        }
    }

    public function display()
    {
        $agendas = Agenda::where('status', 0)->orderBy('date_start', 'ASC')->orderBy('clock_start', 'ASC')->get();
        return view('display', compact('agendas'));
    }
}
