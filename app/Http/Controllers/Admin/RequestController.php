<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCreateRequest;
use App\Models\RequestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = session()->get('message') ?? NULL;

        $requests = RequestModel::query()->orderby('created_at', 'desc')->paginate(10);
        
        return view('requests.requests', [
            'requests' => $requests,
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
        return view('requests.request_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCreateRequest $request)
    {
        $request = RequestModel::create($request->validated());

        $message = $request ? 'Success!' : 'Failed';

        return view('requests.request_create', [
            'message' => $message
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(RequestModel $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestModel $request)
    {
        return view('requests.request_edit', [
            'request' => $request
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCreateRequest $request_item, RequestModel $request)
    {
        $request->fill($request_item->validated());

        $message = $request->save() ? 'Success!' : 'Failed';

        return view('requests.request_edit', [
            'request' => $request,
            'message' => $message
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestModel $request)
    {
        $message = $request->delete() ? 'Success' : 'Failed';
        return redirect()->route('requests.index')->with('message', $message);
    }
}
