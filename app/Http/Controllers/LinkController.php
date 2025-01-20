<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\User;
use Auth;
use Illuminate\View\View;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        $user = auth()->user();

        $user
            ->links()
            ->create($request->validated());

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link): View
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        //$link->link = $request->link;
        //$link->name = $request->name;
        //$link->save();

        // Método mais limpo
        $link->fill($request->validated())
            ->save();

        return to_route('dashboard')
            ->with('message', 'Link updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('dashboard')
            ->with('message', 'Link deleted successfully');
    }

    public function up(Link $link)
    {
        $link->moveUp();

        return back();
    }

    public function down(Link $link)
    {
        $link->moveDown();

        return back();
    }
}
