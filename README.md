# BrightServe — Digital Services Platform

## 1. Project Overview

BrightServe is a Laravel-based web application designed to help individuals and businesses explore digital services and submit service requests through an online form.

The project aims to make it easier for customers to communicate their service requirements through a simple, organized website.

## 2. Problem Statement

Customers seeking digital services may have difficulty communicating their requirements and organizing service requests through informal channels. BrightServe provides a website where customers can view available services and submit their requirements in a structured format.

## 3. Target Users

- Individuals seeking digital services.
- Small businesses requiring digital solutions.
- BrightServe personnel who will review and manage customer requests as the application develops.

## 4. Main Features

The current application includes:

- A homepage introducing BrightServe and its services.
- A shared Laravel Blade layout and navigation menu.
- A service-request form.
- A service dropdown populated from active services in the database.
- Server-side validation for submitted customer information.
- Database storage of submitted service requests.
- Success and validation-error messages.

Further improvements are planned as part of Part 2.

## 5. Information Collected

The service-request form collects the customer's selected service, full name and phone number. Email address, preferred date and a description of the customer's requirements are optional.

## 6. Technology Stack

- PHP
- Laravel
- MySQL
- Laravel Blade
- HTML
- CSS
- JavaScript

## 7. Database Structure

The application uses MySQL for data storage. Its database includes the following tables:

- `services` — stores available digital services.
- `bookings` — stores submitted service requests.
- `users` — supports Laravel's user-related functionality.
- Additional tables used by Laravel for sessions, caching and background jobs.

The `Booking` model is associated with a service through its `service()` relationship. The inverse relationship and other improvements will be completed during Part 2.

## 8. Running the Project Locally

### Prerequisites

Install and configure:

- PHP compatible with the project.
- Composer.
- MySQL or a compatible database server.
- Git.

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Olorunwa2023/brightserve-laravel.git
   ```

2. Enter the project directory:

   ```bash
   cd brightserve-laravel
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create your local environment file:

   ```bat
   copy .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Create a MySQL database named `brightserve_local`. Configure the database connection in `.env` using the host, port, username and password for your local MySQL installation.

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Ensure the `services` table contains active service records so they can appear in the request form.

9. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

10. Open the application in your browser:

    `http://127.0.0.1:8000`

To open the service-request page directly, visit:

`http://127.0.0.1:8000/request`

### Important Configuration Note

Database settings vary between computers. Use the settings appropriate for your local MySQL server. Keep your `.env` file private and never commit database passwords or other secrets to GitHub.

## 9. Testing

The service-request submission feature has been tested locally with fictional customer information. A submitted request was verified in the `bookings` table using Laravel Tinker.

Additional Part 2 tests will cover input limits, phone-format validation, old input preservation, invalid submissions, duplicate submissions after refreshing, and responsive homepage screenshots.

## 10. Current Development Status

**Part 1: Approved**

The initial website, shared layout, request form, database migrations, service dropdown and basic booking-submission functionality have been implemented.

**Part 2: In Progress**

The next improvements include:

- Adding the project brief and a JavaScript message character counter.
- Completing the model relationships.
- Loading homepage service cards dynamically from the database.
- Refining input validation and preserving old form values.
- Testing successful and unsuccessful submissions.
- Capturing desktop and mobile screenshots.
- Improving project documentation and preparing evidence of local testing.

## 11. Repository

GitHub: https://github.com/Olorunwa2023/brightserve-laravel

## 12. License

This project is developed as a Laravel web-development capstone project.
