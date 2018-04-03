<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('user_id','=',Auth::id())->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check())
        {
            $event = new Event();
            $event->name = $request->get('name');
            $event->user_id = Auth::id();
            $event->category = $request->get('category');
            $event->place = $request->get('place');
            $event->address = $request->get('address');

            //$date=date_create($request->get('startdate'));
            //$format = date_format($date,"Y-m-d");
            //$event->start_date = strtotime($format);

            //$date2=date_create($request->get('enddate'));
            //$format2 = date_format($date2,"Y-m-d");
            //$event->end_date = strtotime($format2);

            $event->start_date = $request->get('startdate');
            $event->end_date = $request->get('enddate');

            $event->is_virtual = $request->get('isvirtual') == 'true' ? 1 : 0;

            $event->save();
            return redirect()->route('events.index')
                ->with('success','Evento agregado exitosamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
        request()->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        //$request->get('atributo');

        $event->update($request->all());

        return redirect()->route('events.index')
            ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
        return redirect()->route('events.index')
            ->with('success','Event deleted successfully');
    }
}
