@extends('layouts.authapp')
@section('title', "Admin Panel")

@section('content')
    <section class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                

            @if(isset($appointments))
                <div class="row">
                    <h3>Appointments</h3>
                    <hr>
                    <br>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <br>
                    @if($appointments->isEmpty())
                        <p>No appointments yet.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Pickup Address</th>
                                    <th>Booking Type</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <th scope="row">#00{{ $appointment->id }}</th>
                                        <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('D, M d') }}</td>
                                        <td>{{ $appointment->appointment_time }}</td>
                                        <td>
                                            {{ $appointment->address }}, <br> {{ $appointment->city }}, <br> {{ $appointment->state }},
                                            <br> {{ $appointment->zip_code }}
                                        </td>
                                        <td>{{ $appointment->booking_type }}</td>
                                        <td>
                                            {{ $appointment->first_name }} {{ $appointment->last_name }} | {{ $appointment->email }} | {{ $appointment->phone_number }}
                                        </td>
                                        <td>{{ $appointment->status }}</td>
                                        <td data-bs-toggle="modal" data-bs-target="#modalforuser{{ $appointment->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modalforuser{{ $appointment->id }}" tabindex="-1" aria-labelledby="modalforuser{{ $appointment->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('appointments.updateStatus') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5>Update appointment status</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="{{ $appointment->id }}" />
                                                        <select class="form-select" name="status" aria-label="Default select example">
                                                            <option value="submitted" {{ $appointment->status === 'submitted' ? 'selected' : '' }}>submitted</option>
                                                            <option value="pending" {{ $appointment->status === 'pending' ? 'selected' : '' }}>pending</option>
                                                            <option value="in_progress" {{ $appointment->status === 'in_progress' ? 'selected' : '' }}>in_progress</option>
                                                            <option value="completed" {{ $appointment->status === 'completed' ? 'selected' : '' }}>completed</option>
                                                            <option value="canceled" {{ $appointment->status === 'canceled' ? 'selected' : '' }}>canceled</option>
                                                            <option value="rescheduled" {{ $appointment->status === 'rescheduled' ? 'selected' : '' }}>rescheduled</option>
                                                            <option value="no_show" {{ $appointment->status === 'no_show' ? 'selected' : '' }}>no_show</option>
                                                            <option value="rejected" {{ $appointment->status === 'rejected' ? 'selected' : '' }}>rejected</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="sofax-default-btn pill sofax-header-btn" data-text="SAVE">
                                                            <span class="button-wraper">SAVE</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            @endif

            @yield('content')
        </div>
    </section>
    <!-- @include('admin.partials.scripts') -->
@endsection