# Quiz Bot Admin Dashboard

## Overview

The Quiz Bot Admin Dashboard is a Laravel-based web application designed to facilitate the management of user-contributed questions and user accounts for a Telegram quiz bot. The admin dashboard allows administrators to review, approve, or reject questions submitted by users, as well as perform various user management operations such as banning or unblocking users.

## Features

- Question Management:
  - View a list of pending questions submitted by Telegram bot users.
  - Approve or reject questions with a single click.
  - Search and filter questions based on different criteria.

- User Management:
  - View a list of users interacting with the Telegram bot.
  - Ban or unban users to control their access to the bot.
  - Block or unblock users to restrict their interaction with the bot.

- Dashboard Statistics:
  - Visualize key metrics and statistics related to user interactions and question contributions.

## Getting Started

### Prerequisites

- [Laravel](https://laravel.com/docs) installed on your server.
- [Composer](https://getcomposer.org/) for dependency management.

### Installation

1. Clone the repository:

   
    git clone https://github.com/BiluAilu/Quiz_Bot_Admin_Dashboard.git
    
2. Navigate to the project directory:

``` 
    cd Quiz_Bot_Admin_Dashboard
```
    
3. Install dependencies:

```
    composer install
```
    
4. Configure the environment:

    - Copy the .env.example file to .env and update the database and telegram token variables.

5. Run migrations and seed the database:

```  
    php artisan migrate --seed
```
    
6. Generate application key:

```
    php artisan key:generate
```
    
7. Serve the application:

```
    php artisan serve
```
    
8. Access the admin dashboard at [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- Log in with the default admin credentials (username: admin@example.com, password: password) (The one that you put in your seeder).
- Navigate through the dashboard to manage questions and users.
- Customize settings and appearance as needed for your specific use case.

