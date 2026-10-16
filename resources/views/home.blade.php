@extends('layouts.app')

@section('title', 'BrightServe | Digital Solutions')

@section('content')

    <section class="hero" id="about">
        <div class="hero-content">
            <h1>Smart Digital Solutions for a <span>Brighter Future</span></h1>

            <p>
                BrightServe helps individuals and businesses solve problems
                through reliable technology, digital services, and innovative
                solutions.
            </p>

            <a href="#services" class="button">Explore Our Services</a>
        </div>
    </section>

    <section class="services" id="services">
        <h2>What We Do</h2>

        <p class="intro">
            Practical digital solutions designed to help you grow.
        </p>

        <div class="service-grid">
            <div class="service-card">
                <div style="font-size: 35px;">💻</div>
                <h3>Web Development</h3>
                <p>
                    Building modern, responsive websites for individuals
                    and businesses.
                </p>
            </div>

            <div class="service-card">
                <div style="font-size: 35px;">📊</div>
                <h3>Data Analysis</h3>
                <p>
                    Turning data into useful insights that support
                    better decisions.
                </p>
            </div>

            <div class="service-card">
                <div style="font-size: 35px;">🛠️</div>
                <h3>Digital Services</h3>
                <p>
                    Using technology to improve everyday tasks and
                    business operations.
                </p>
            </div>
        </div>
    </section>

@endsection