<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\View\View;

class ConferenceController extends Controller
{
    public function index(): View
    {
        $conferences = Conference::query()
            ->orderBy('conference_date')
            ->get();

        return view('conferences.index', ['conferences' => $conferences]);
    }

    public function show(Conference $conference): View
    {
        return view('conferences.show', ['conference' => $conference]);
    }
}