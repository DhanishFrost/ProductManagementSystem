# Laravel Project Setup

## Prerequisites

Before you can run the Laravel application, ensure that you have the following software installed:

- **PHP** >= 7.3
- **Composer** (PHP Dependency Manager)
- **Node.js** and **npm** (for front-end dependencies)
- **MySQL** or **SQLite** (or another database of your choice)

## Installation and Setup

1. **Clone the repository**:
    ```bash
    https://github.com/DhanishFrost/ProductManagementSystem.git
    cd ProductManagementSystem
    ```

2. **Install Neccessary Dependencies**:
        ```bash
       composer install
       npm install
       php artisan storage:link
        ```
2. **Running the Application**:
        ```bash
       php artisan serve
       npm run dev
        ```
