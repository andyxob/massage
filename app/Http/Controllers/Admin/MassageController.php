<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests\MassageRequest;
use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massages = Massage::all();
        return view('admin.massages.index', compact('massages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.massages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MassageRequest $request)
    {
        $massage = Massage::create($request->all());
        return redirect()->route('massages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function show(Massage $massage)
    {
        return view('admin.massages.show', compact('massage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function edit(Massage $massage)
    {
        return view('admin.massages.form', compact('massage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function update(MassageRequest $request, Massage $massage)
    {
        $massage->update($request->all());
        return redirect()->route('massages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Massage $massage)
    {
        $massage->delete();
        return redirect()->route('massages.index');
    }
}
