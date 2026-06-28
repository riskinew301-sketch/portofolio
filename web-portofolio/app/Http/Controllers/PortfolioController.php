<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Message;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('home', compact('skills'));
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
        ]);

        Message::create($request->all());

        return redirect()->back()->with('success', 'MESSAGE RECEIVED. WE WILL RESPOND SHORTLY.');
    }
}
