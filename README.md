# Laravel Project Setup

## Prerequisites

Before you can run the Laravel application, ensure that you have the following software installed:

- **PHP**
- **Composer** (PHP Dependency Manager)
- **npm** (for front-end dependencies)
- **MySQL** (Database)

## Installation and Setup

1. **Clone the repository**:
    ```bash
    git clone https://github.com/DhanishFrost/ProductManagementSystem.git
    cd ProductManagementSystem
    ```

2. **Install Neccessary Dependencies**:
   ```bash
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   php artisan storage:link
   ```
2. **Running the Application**:
   ```bash
   php artisan serve
   npm run dev
   ```
