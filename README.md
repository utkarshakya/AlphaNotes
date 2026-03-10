# Alpha Notes

Alpha Notes is a simple note-taking application that allows users to create, read, update, and delete notes. It is built with PHP and uses a MySQL database to store notes. The project uses Composer for dependency management and Docker for containerization. The container includes Apache with PHP 8.2 and the required PHP extensions. The frontend is built with HTML, TailwindCSS, and JavaScript.

## Clone the Repository

```sh
git clone https://github.com/utkarshakya/AlphaNotes.git
cd AlphaNotes
```

## Environment Setup

Copy the example environment file:

```sh
cp .env.example .env
```

Update the database configuration values in `.env` according to your environment.

---

# Run With Docker (Recommended)

### Requirements

* Docker
* Docker Compose
* Node.js (for frontend tooling)

### Start the Application

Build and start the containers:

```sh
docker compose up --build -d
```

Install frontend dependencies:

```sh
npm install
```

Open the application in your browser:

```
http://localhost:8080
```

### Stop the Containers

```sh
docker compose down
```

---

# Run Without Docker

### Requirements

* PHP 8.2
* MySQL
* Node.js
* Composer

### Install Dependencies

Install PHP dependencies:

```sh
composer install
```

Install frontend dependencies:

```sh
npm install
```

### Start the Development Server

```sh
npm run dev
```

Make sure your MySQL server is running and configured in the `.env` file.

Open the application in your browser:

```
http://localhost:8000
```
