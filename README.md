# Alpha Notes

Alpha Notes is a simple note-taking application that allows users to create, read, update, and delete notes. It is built with PHP and uses a MySQL database to store notes. This project is a PHP application that uses Composer for dependency management and Docker for containerization. It includes an Apache server with PHP support and various PHP extensions. The frontend is built with HTML, Tailwindcss, and JavaScript.

## Requirements

- Docker
- PHP 8.2
- Node.js
- Composer (Optional)

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/utkarshakya/AlphaNotes.git
    cd AlphaNotes
    ```

2. Copy the example environment file and configure it:

    ```sh
    cp .env.example .env
    ```

   - Update the database configuration values in the [.env](.env) file.

3. Build and start the Docker containers:

    - Before running the following command, uncomment the volumes, ports, and env_file in the [docker-compose.yml](docker-compose.yml) file.

    ```sh
    docker-compose up --build -d
    ```

4. Install frontend dependencies:

    ```sh
    npm install
    ```

5. Access the application in your web browser at `http://localhost:8080`.

## To Run Locally Without Docker

### Local Requirements

- PHP 8.2
- MySQL
- Node.js
- Composer

### Steps

- After cloning the repository, follow these steps to run the application locally:

1. Install PHP dependencies:

    ```sh
    composer install
    ```

2. Install frontend dependencies:

    ```sh
    npm install
    ```

3. Start the PHP development server:

    ```sh
    npm run dev
    ```

    Before running make sure your MySQL server is setup and running.

4. Access the application in your web browser at `http://localhost:8000`.

NOTE: It is recommended to use Docker because it is simple and no additional setup is required. The local setup may require additional configuration based on your system.
