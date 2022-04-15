<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome',['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

    public function signin() {
        return view('events.signin');
    }

    public function cadastrar() {
        return view('events.cadastrar');
    }
}
