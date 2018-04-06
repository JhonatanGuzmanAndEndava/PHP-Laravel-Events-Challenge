<?php

namespace App\Http\Controllers;

use App\Event;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

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
        $events = Event::all();
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
        return view('admin.show',compact('event'));;
    }

    public function deleteEvent(Event $event)
    {
        $event->delete();
        return redirect()->route('admins.events')
            ->with('success','Evento eliminado correctamente');
    }

    public function generateReport() {

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
