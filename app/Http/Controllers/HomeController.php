<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\PageHeader;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutData = About::first();
        $pageHeaderData = PageHeader::first();
        $skillData = Skill::all();
        $projectData = Project::all();
        $testimonialData = Testimonial::all();

        return view('home', compact('aboutData', 'pageHeaderData', 'skillData', 'projectData', 'testimonialData'));
    }

    public function edit_page()
    {
        $aboutData = About::first();
        $pageHeaderData = PageHeader::first();
        $skillData = Skill::all();
        $projectData = Project::all();
        $testimonialData = Testimonial::all();

        return view('editpage', compact('aboutData', 'pageHeaderData', 'skillData', 'projectData', 'testimonialData'));
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('name', $username)->first();

        if ($user && $user->password === $password) {
            // Username and password match
            return redirect()->route('editpage');
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
