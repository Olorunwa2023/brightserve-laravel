@extends('layouts.app')

@section('title', 'BrightServe | Digital Solutions')

@section('content')

    <section class="hero" id="about">
        <div class="hero-content">
            <h1>
                Smart Digital Solutions for a
                <span>Brighter Future</span>
            </h1>

            <p>
                BrightServe helps individuals and businesses solve problems
                through reliable technology, digital services, and innovative
                solutions.
            </p>

            <a href="#services" class="button">
                Explore Our Services
            </a>
        </div>
    </section>

    <section class="services" id="services">
        <h2>What We Do</h2>

        <p class="intro">
            Practical digital solutions designed to help you grow.
        </p>

        <div class="service-grid">
            @forelse ($services as $service)
                <div class="service-card">
                    <div style="font-size: 35px;">✦</div>

                    <h3>{{ $service->name }}</h3>

                    <p>{{ $service->description }}</p>
                </div>
            @empty
                <p>No services are currently available.</p>
            @endforelse
        </div>
    </section>

@endsection