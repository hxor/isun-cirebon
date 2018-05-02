<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\AgendaGallery;
use Illuminate\Http\Request;
use Session;
use Yajra\Datatables\Datatables;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.agenda.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'location' => 'required',
            'address' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'clock_start' => 'required',
            'clock_end' => 'required',
            'disposition'
        ]);

        // $request['date_start'] = $request->date_start . ' ' . $request->clock_start . ':00';
        // $request['date_end'] = $request->date_end . ' ' . $request->clock_end . ':00';
        // return $request->all();
        Agenda::create($request->all());

        Session::flash('success', 'Data berhasil disimpan');

        return redirect()->route('admin.agenda.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('pages.agenda.show', compact('agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);

        return view('pages.agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'location' => 'required',
            'address' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'clock_start' => 'required',
            'clock_end' => 'required'
        ]);

        $agenda = Agenda::findOrFail($id);
        $agenda->update($request->all());

        Session::flash('success', 'Data berhasil diperbaharui');

        return redirect()->route('admin.agenda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        Session::flash('success', 'Data berhasil dihapus');

        return redirect()->route('admin.agenda.index');
    }

    /**
     * Display DataTable
     * @return [type] [description]
     */
    public function dataTable()
    {
        $agenda = Agenda::query();
        return Datatables::of($agenda)
            ->addColumn('date_start', function ($agenda) {
                return $agenda->date_start . ' ' . $agenda->clock_start;
            })
            ->addColumn('date_end', function ($agenda) {
                return $agenda->date_end . ' ' . $agenda->clock_end;
            })
            ->addColumn('status', function ($agenda) {
                return $agenda->status == 1 ? 'Selesai' : 'Jadwal';
            })
            ->addColumn('images', function ($agenda) {
                return '<a href="'. route('admin.agenda.upload', $agenda->id) .'" class="btn btn-outline-secondary btn-sm"  style="padding-top: 1px;padding-bottom: 1px;"> <i class="fa fa-camera"></i></a>';
            })
            ->addColumn('action', function ($agenda) {
                return view('layouts.backend.partials._action', [
                    'model' => $agenda,
                    'edit_url' => route('admin.agenda.edit', $agenda->id),
                    'show_url' => route('admin.agenda.show', $agenda->id),
                    'form_url' => route('admin.agenda.destroy', $agenda->id),
                ]);
            })
            ->rawColumns(['images', 'action'])->make(true);
    }

    public function createGallery($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('pages.agenda.gallery', compact('agenda'));
    }

    public function uploadGallery(Request $request, $id)
    {
        $photo = $request->file('file');
        $fileName = 'agenda-'. $id . '-'. uniqid() . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'agenda';
        $photo->move($destinationPath, $fileName);
        AgendaGallery::create([
            'path' => $fileName,
            'agenda_id' => $id
        ]);
        return response([
            'message' => true
        ]);
    }

    public function destroyGallery($id)
    {
        $image = AgendaGallery::find($id);
        $this->imageDelete($image->path);
        $image->delete();


        Session::flash('success', 'Data berhasil dihapus');

        return redirect()->back();
    }

     /**
     * Delete image function
     */
    public function imageDelete($image)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'agenda' . DIRECTORY_SEPARATOR . $image;
        unlink($path);
    }
}
