<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\AgendaGallery;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $agendas = Agenda::where('status', 0)->orderBy('id', 'DESC')->limit(6)->get();
        $data = [];
        foreach ($agendas as $agenda ) {
            $data[] = [
                'id' => $agenda->id,
                'title' => $agenda->title,
                'date' => 
                            $agenda->date_start == $agenda->date_end
                            ? 
                            $agenda->start_date . ' - ' . $agenda->clock_start . ' s/d ' . ($agenda->clock_end == '00:00' ? 'Selesai' : $agenda->clock_end)
                            :
                            $agenda->start_date . ' ' . $agenda->clock_start . ' - ' . $agenda->end_date . ' ' . $agenda->clock_end,
                'location' => $agenda->location,
                'disposition' => $agenda->disposition,
                'date_only' => $agenda->date_start->format('d')
            ];
        }
        return response()->json([
            'status' => '200',
            'message' => 'List Schedule',
            'data' => $data
        ]);
    }

    public function show($id)
    {
        try {
            $agenda = Agenda::where('id', $id)->firstOrFail();
            $data = [
                'id' => $agenda->id,
                'title' => $agenda->title,
                'location' => $agenda->location,
                'address' => $agenda->address,
                'description' => $agenda->description,
                'disposition' => $agenda->disposition,
                'date' => $agenda->date_start == $agenda->date_end
                    ?
                    $agenda->start_date . ' - ' . $agenda->clock_start . ' s/d ' . ($agenda->clock_end == '00:00' ? 'Selesai' : $agenda->clock_end)
                    :
                    $agenda->start_date . ' ' . $agenda->clock_start . ' - ' . $agenda->end_date . ' ' . $agenda->clock_end,
                'images' => $agenda->images ? $agenda->images : ''
            ];
            return response()->json([
                'status' => '200',
                'message' => 'Detail schedule id ' . $id,
                'data' => $data
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => '404',
                'message' => $e->getMessage(),
                'data' => ''
            ]);
        }
    }
}
