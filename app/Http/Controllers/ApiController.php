<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\AgendaGallery;
use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function index()
    {
        $agendas = Agenda::where('status', 0)->orderBy('date_start', 'ASC')->orderBy('clock_start', 'ASC')->get();
        $data = [];
        foreach ($agendas as $agenda ) {
            $data[] = [
                'id' => $agenda->id,
                'title' => $agenda->title,
                'organizer' => $agenda->organizer,
                'location' => $agenda->location,
                'disposition' => $agenda->disposition,
                'uniform' => $agenda->uniform,
                'date' => 
                            $agenda->date_start == $agenda->date_end
                            ? 
                            $agenda->start_date . ' - ' . $agenda->clock_start . ' s/d ' . ($agenda->clock_end == '00:00' ? 'Selesai' : $agenda->clock_end)
                            :
                            $agenda->start_date . ' ' . $agenda->clock_start . ' - ' . $agenda->end_date . ' ' . $agenda->clock_end,
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
                'description' => $agenda->description ? $agenda->description : '',
                'organizer' => $agenda->organizer,
                'disposition' => $agenda->disposition,
                'uniform' => $agenda->uniform,
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

    public function archive()
    {
        

        try {
            $archive = [];
            $year = Agenda::select(DB::raw('YEAR(date_start) year'))->groupBy('year')->get();
            foreach ($year as $key => $value) {
                $month = Agenda::select(DB::raw('MONTH(date_start) month, MONTHNAME(date_start) month_name'))
                        ->groupBy('month')
                        ->groupBy('month_name')
                        ->whereYear('date_start', $value->year)
                        ->get();
                $archive[]=[
                    'tahun' => $value->year,
                    'archive' => $month
                ];
            }
            return response()->json([
                'status' => '200',
                'message' => 'List Year and Month Agenda',
                'data' => $archive
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => '404',
                'message' => $e->getMessage(),
                'data' => ''
            ]);
        }
    }

    public function getYearAgenda()
    {
        try {
            $archive = Agenda::select(DB::raw('YEAR(date_start) year'))->groupBy('year')->get();
            return response()->json([
                'status' => '200',
                'message' => 'List Year in Schedule',
                'data' => $archive
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => '404',
                'message' => $e->getMessage(),
                'data' => ''
            ]);
        }
    }

    public function getMonthAgenda($year)
    {
        try {
            $archive = Agenda::select(DB::raw('MONTH(date_start) month, MONTHNAME(date_start) month_name'))->groupBy('month')->groupBy('month_name')->whereYear('date_start', $year)->get();
            return response()->json([
                'status' => '200',
                'message' => 'List Month in Schedule',
                'data' => $archive
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => '404',
                'message' => $e->getMessage(),
                'data' => ''
            ]);
        }
    }

    public function getArchiveAgenda($month, $year)
    {
        try {
            $archive = Agenda::whereMonth('date_start', $month)->whereYear('date_start', $year)->get();
            return response()->json([
                'status' => '200',
                'message' => 'Schedule in a month',
                'data' => $archive
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
