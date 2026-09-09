# POS Lab — CodeIgniter 4 MVC Activity

This project is a four-page Point-of-Sale starter built for the routing, controller, and view laboratory activity.

## Required pages

- `/` — landing page
- `/about` — activity overview
- `/customers` — five customer records from a static PHP array
- `/users` — five staff records from a static PHP array

## Run locally

1. Install PHP 8.2+ with the `intl` and `mbstring` extensions.
2. Install Composer.
3. Clone this repository and enter the `pos-lab` folder.
4. Run `composer install`.
5. Copy `env` to `.env` and set `app.baseURL = 'http://localhost:8080/'`.
6. Start the development server with `php spark serve`.
7. Open `http://localhost:8080/` in a browser.

## MVC structure

- `app/Config/Routes.php` maps URLs to controller methods.
- `app/Controllers/Pages.php` renders the landing and about pages.
- `app/Controllers/Customers.php` supplies the customer static array.
- `app/Controllers/Users.php` supplies the user/staff static array.
- `app/Views/` contains the shared layout and page templates.

The activity intentionally uses static arrays instead of a database. The `database/README.md` records that decision for this module; a database export will be added in the next module when the data layer is introduced.

## Verification

Run `php spark routes` to confirm all four routes. The customer and user templates each use `foreach` to render every record.
