<?php

namespace App\Http\Controllers;

use App\Event;
use App\Profile;
use App\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function viewEvents() {
        $events = Event::all()->sortBy('created_at');
        return view('admin.event', compact('events'));
    }

    public function doAdmin(Request $request, User $user) {
        $user->user_type = "admin";
        $user->save();
        return redirect()->route('admins.users')
            ->with('success','Perfil actualizado con éxito');
    }

    public function removeAdmin(Request $request, User $user) {
        $user->user_type = "user";
        $user->save();
        return redirect()->route('admins.users')
            ->with('success','Perfil actualizado con éxito');
    }

    public function showEvent(Event $event)
    {
        return view('admin.show',compact('event'));
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();
        return redirect()->route('admins.events')
            ->with('success','Evento eliminado correctamente');
    }

    public function generateReport() {
        return view('admin.report');
    }

    public function doReport(Request $request) {

        $value = $request->get('order');

        if($value=='is_virtual_pres') {
            $value = 'is_virtual';
            $events = Event::all()->sortBy($value)
                ->where('start_date','>=',$request->get('start_date'))
                ->where('end_date','<=',$request->get('end_date'));
        }elseif($value=='is_virtual_virt') {
            $value = 'is_virtual';
            $events = Event::all()->sortByDesc($value)
                ->where('start_date','>=',$request->get('start_date'))
                ->where('end_date','<=',$request->get('end_date'));
        }else {
            $events = Event::all()->sortBy($value)
                ->where('start_date','>=',$request->get('start_date'))
                ->where('end_date','<=',$request->get('end_date'));
        }

        if($request->get('format') == 'pdf') {

            $view = View::make('admin.pdf', compact('events'))->render();

            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML($view)->setPaper('a2', 'horizontal');
            return $pdf->download('report.pdf');
        }
        else {
            $csvExporter = new \Laracsv\Export();

            $csvExporter->beforeEach(function ($event) {
                $event->owner = User::find($event->user_id)->email;
            });

            $csvExporter->build($events, ['name' => 'Nombre', 'created_at' => 'Fecha de creacion', 'updated_at' => 'Fecha de actualizacion',
                'owner' => 'Propietario', 'category' => 'Categoria', 'place' => 'Lugar' , 'place',
                'address' => 'Direccion', 'start_date' => 'Fecha de inicio', 'end_date' => 'Fecha de fin', 'is_virtual' => 'Es virtual']);

            $filename = 'report.csv';

            return new Response($csvExporter->getCsv(), 200, array(
                'Content-Type' => 'application/csv',
                'Content-Disposition' =>  'attachment; filename="'.$filename.'"'
            ));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        Profile::find($id)->delete();
        return redirect()->route('admins.users')
            ->with('success','Usuario eliminado correctamente');
    }
}
