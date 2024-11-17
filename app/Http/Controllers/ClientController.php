<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        return view("pages.clients.index", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.clients.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        try {
            Client::create([
                'user_id' => $request->user_id,
                'company_name' => $request->company_name,
                'vat_number' => $request->vat_number,
                'address' => $request->address,
            ]);

            return redirect()
                ->route('clients.index')
                ->with('success', 'Client created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating client: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create client. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('pages.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        try {
            $client->update([
                'user_id' => $request->user_id,
                'company_name' => $request->company_name,
                'vat_number' => $request->vat_number,
                'address' => $request->address,
            ]);

            return redirect()
                ->route('clients.index')
                ->with('success', 'Client updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating client: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update client. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        try {
            $client->delete();
            return redirect()
                ->route('clients.index')
                ->with('success', 'Client deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting client: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Failed to delete client. Please try again.');
        }
    }
}
