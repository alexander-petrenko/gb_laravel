<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SourceCreateRequest;
use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = session()->get('message') ?? NULL;

        $sources = Source::all();
        
        return view('sources.sources', [
            'sources' => $sources,
            'message' => $message
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sources.source_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SourceCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SourceCreateRequest $request)
    {
        $source = Source::create($request->validated());

        $message = $source ? 'Success!' : 'Failed';

        return view('sources.source_create', [
            'message' => $message
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        return view('sources.source_edit', [
            'source' => $source
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\SourceCreateRequest  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(SourceCreateRequest $request, Source $source)
    {
        $source->fill($request->validated());

        $message = $source->save() ? 'Success!' : 'Failed';

        return view('sources.source_edit', [
            'source' => $source,
            'message' => $message
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        $message = $source->delete() ? 'Success' : 'Failed';
        return redirect()->route('sources.index')->with('message', $message);
    }
}
