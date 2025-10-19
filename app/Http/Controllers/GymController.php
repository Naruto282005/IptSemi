<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Trainer;
use App\Models\Session;

class GymController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function members() {
        $members = Member::withCount('sessions')->get();
        return view('members.index', compact('members'));
    }

    public function trainers() {
        $trainers = Trainer::withCount('sessions')->get();
        return view('trainers.index', compact('trainers'));
    }

    public function sessions() {
        $sessions = Session::with(['member', 'trainer'])->get();
        return view('sessions.index', compact('sessions'));
    }
}
