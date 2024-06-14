# News DataTable Project

This project displays a data table with data fetched from the Times of India RSS feed in JSON format. The table supports searching, sorting, and pagination. It is built using Laravel, DataTables, and Bootstrap (HTML and CSS).

## Requirements

- PHP >= 7.4
- Composer

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/YashDhoke/News-Display.git
    cd News-Display
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Configure the environment:**

    - Copy the `.env.example` file to `.env`:

      ```bash
      cp .env.example .env
      ```

    - Generate the application key:

      ```bash
      php artisan key:generate
      ```

    - Update the `.env` file with your database configuration and other necessary environment variables.

4. **Run migrations (if any):**

    ```bash
    php artisan migrate
    ```

5. **Serve the application:**

    ```bash
    php artisan serve
    ```

    The application will be available at `http://localhost:8000`.


6. **Display the news:**

    ```bash
    php artisan serve
    ```

    The datatable display of the news will be available at `http://localhost:8000/showfeed`.

## Packages Used

- **Laravel**: 8.x
- **GuzzleHTTP**: 7.x
- **DataTables**: 1.10.x
- **Bootstrap**: 4.x

## Folder Structure

- **app/Http/Controllers/FeedController.php**: Contains the controller logic for fetching data from the API.
- **resources/views/feed.blade.php**: Contains the HTML for displaying the data table.
- **public/css/table_style.css**: Custom CSS for styling the table.
- **public/js/table_script.js**: Custom JavaScript for initializing the DataTable.

## Custom Styling

The custom CSS file `public/css/table_style.css` and the custom JavaScript file `public/js/table_script.js` are used to enhance the appearance and functionality of the data table.
