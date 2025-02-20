# Alpha Notes

Alpha Notes is a simple note-taking application that allows users to create, read, update, and delete notes. It is built with PHP and uses a MySQL database to store notes. This project uses Composer for dependency management and Docker for containerization.

## Requirements

- Docker
- PHP 8.2

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

    ```sh
    docker-compose up --build -d
    ```

4. Install frontend dependencies:

    ```sh
    npm install
    ```

## Usage

- Access the application in your web browser at `http://localhost:8080`.