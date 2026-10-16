@extends('layouts.app')

@section('title', 'Request a Service | BrightServe')

@section('content')

<section class="request-page">
    <div class="request-container">

        <h1>Request a Service</h1>

        <p>
            Tell us what you need, and our team will get in touch with you.
        </p>

        <form action="{{ url('/request') }}" method="POST">
            @csrf

            <div class="form-group">
         <label for="service_id">Service Required</label>

            <select id="service_id" name="service_id" required>
                  <option value="">Select a service</option>

               @foreach ($services as $service)
                 <option value="{{ $service->id }}">
                            {{ $service->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="customer_name">Full Name</label>

                <input
                    type="text"
                    id="customer_name"
                    name="customer_name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email Address (Optional)</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                >
            </div>

            <div class="form-group">
                <label for="preferred_date">Preferred Date (Optional)</label>

                <input
                    type="date"
                    id="preferred_date"
                    name="preferred_date"
                >
            </div>

            <div class="form-group">
                <label for="message">Describe What You Need (Optional)</label>

                <textarea
                    id="message"
                    name="message"
                    rows="5"
                ></textarea>
            </div>

            <button type="submit" class="button">
                Submit Request
            </button>
        </form>

    </div>
</section>

@endsection