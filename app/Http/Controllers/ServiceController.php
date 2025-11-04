<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
$services=Service::all();

return view ('index',['services' => $services]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
    
 $validated = $request->validated();
     
          
           if ($request->hasFile('image')) {
        $path = $request->file('image')->store('services', 'public');
       $validated['image'] = $path;
    }
        Service::create($validated);
    }


    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
      return view('show',['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
          return view('Edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {

        $validated = $request->validated();
         
         
          if ($request->hasFile('image')) {
        $path = $request->file('image')->store('services', 'public');
         $validated['image'] = $path;
    }$service->update($validated);
         return redirect()->route('services.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
         $service->delete();
    }
}
