# Submission API

## Setup Instructions

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Set up your `.env` file with your database credentials.
4. Run `php artisan migrate` to create the `submissions` table.
5. Run `php artisan serve` to start the application.
6. Run `php artisan queue:work` to start the queue worker.

## Testing the API

To test the API, use the following command:

```bash
curl -X POST http://localhost:8000/api/submit \
-H "Content-Type: application/json" \
-d '{"name": "Sujeesh", "email": "sujeeshskn@gmail.com", "message": "This is a test message."}'