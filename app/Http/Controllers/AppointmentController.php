<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        if (auth()->check()) {
            // Logged-in users
            $rules = [
                'zip_code' => 'required|string',
                'appointment_date' => 'required|date',
                'appointment_time' => 'required|string',
                'booking_type' => 'required|in:Home,Business',
                'address' => 'required|string',
                'city' => 'required|string',
                'state' => 'required|string|size:2',
            ];
        } else {
            $rules = [
                'zip_code' => 'required|string',
                'appointment_date' => 'required|date',
                'appointment_time' => 'required|string',
                'booking_type' => 'required|in:Home,Business',
                'address' => 'required|string',
                'city' => 'required|string',
                'state' => 'required|string|size:2',

                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'phone_number' => 'required|string',
            ];
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

       Appointment::create([
            'user_id' => auth()->check() ? auth()->id() : null,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'booking_type' => $request->booking_type,
            'address' => $request->address,
            'unit_apt' => $request->unit_apt,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'onside_first_name' => $request->onside_first_name,
            'onside_last_name' => $request->onside_last_name,
            'onside_email' => $request->onside_email,
            'onside_phone_number' => $request->onside_phone_number,
            'removal_items' => $request->removal_items,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Appointment booked successfully!',
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateStatus(Request $request): RedirectResponse
    {
        $appointment = Appointment::findOrFail($request->id);
        $appointment->status = $request->status;
        $appointment->save();

        return back()->with('success', 'Appointment status updated.');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function checkAppointmentAvailability(Request $request): JsonResponse
    {
        $date = $request->input('date');
        $time = $request->input('time');

        $exists = Appointment::where('appointment_date', $date)
            ->where('appointment_time', $time)
            ->where('status', 'submitted')
            ->exists();

        return response()->json(['available' => !$exists]);
    }
}
