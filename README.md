# Reservations API

PHP Developer Task: Room Booking System with Admin and User Endpoints
Objective
Develop a Room Booking System that includes REST API endpoints for:

Users to book and track room bookings.
Admins to manage room inventory.
The system should implement authentication, asynchronous processing with RabbitMQ, and integration with a third-party API. It must include unit tests and at least one functional test.
Requirements
1. REST API Endpoints
Admin Endpoints
Add a Room: Allow admins to add new rooms to the system.
List All Rooms: Provide a list of all available rooms with their details.
Update Room Details: Enable updating room information, such as price or capacity.
Delete a Room: Allow admins to remove a room from the system.
User Endpoints
Book a Room: Enable users to book a specific room for a given date range.
Track Booking Status: Allow users to check the status of their bookings.
2. Authentication
Implement JWT-based authentication:
Admins should log in to access room management endpoints.
Users should register and log in to book rooms and track their bookings.
Add role-based access control to restrict admin-only actions.
3. Async Processing with RabbitMQ
When a user books a room, publish a message to RabbitMQ to handle the booking asynchronously.
A consumer service should process the message, checking room availability and updating the booking status to confirmed or rejected.
4. Third-Party API Integration
Simulate integration with a third-party system to generate booking invoices.
Send booking details to a mock third-party API endpoint after confirming a booking.
5. Tests
Unit Tests: Cover all business logic, including room management, booking logic, and authentication.
Functional Test: Test a complete booking workflow, from user authentication to booking confirmation.
Tech Stack
Backend: PHP (preferably Laravel or Symfony).
Queue: RabbitMQ for asynchronous task handling.
Authentication: JSON Web Tokens (JWT).
Testing: PHPUnit for unit and functional testing.
Database: Use SQLite or MySQL.
Evaluation Criteria
Correct and secure implementation of authentication and role-based access control.
Adherence to RESTful principles and best practices.
Proper integration of RabbitMQ for async processing.
Coverage and robustness of tests.
Clear and well-structured code, following industry standards.
Bonus Points
Use Docker to simplify environment setup.
Provide Swagger/OpenAPI documentation for the API.
Include data validation and error handling in all endpoints
