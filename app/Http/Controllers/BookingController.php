<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Afficher la liste des réservations.
     */
    public function index()
    {
        return view('bookings.index', ['bookings' => Booking::all()]);
    }

    /**
     * Afficher le formulaire de création.
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Enregistrer une nouvelle réservation.
     */
    public function store(StoreBookingRequest $request)
    {
        Booking::create($request->validated());
        return redirect()->route('bookings.index')->with('success', 'Réservation ajoutée avec succès.');
    }

    /**
     * Afficher les détails d’une réservation.
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', ['booking' => $booking]);
    }

    /**
     * Afficher le formulaire d’édition.
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', ['booking' => $booking]);
    }

    /**
     * Mettre à jour une réservation existante.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->validated());
        return redirect()->route('bookings.index')->with('success', 'Réservation mise à jour avec succès.');
    }

    /**
     * Supprimer une réservation.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Réservation supprimée avec succès.');
    }
}
