# Water Supply Control System

## Overview

Made with Laravel 9 and MongoDB

Project that will mainly monitor and control the water supply for a housing complex by controlling water pumps, designed to work in conjunction with a ReactNative mobile app and an Arduino/ESP32 system but unfinished. Its current functions are:

- Loading page required
- Controlled access with middleware
- CRUD operations
- Charts for water supply
- API requests for ReactNative
- Frontend for on/off pump control

## Technologies Used

- **Backend**: Laravel 9
- **Database**: MongoDB
- **Frontend**: ReactNative (integration via API)
- **Hardware**: Arduino/ESP32

## Features

1. **Loading Page Required**
2. **Controlled Access with Middleware**
    - Secure login and user authentication.
3. **CRUD Operations**
    - Create, Read, Update, and Delete functionalities for managing water supply data.
4. **Charts for Water Supply**
    - Visualization of water supply data using charts.
5. **API Requests for ReactNative**
    - Endpoints for mobile app interactions.
6. **Frontend for On/Off Pump Control**
    - User interface for controlling water pumps.

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/your-repo-name.git
    ```
2. Navigate to the project directory:
    ```sh
    cd your-repo-name
    ```
3. Install the dependencies:
    ```sh
    composer install
    npm install
    ```
4. Set up your environment variables by copying the `.env.example` file to `.env` and adjusting the settings accordingly:
    ```sh
    cp .env.example .env
    ```
5. Generate the application key:
    ```sh
    php artisan key:generate
    ```
6. Run the migrations:
    ```sh
    php artisan migrate
    ```

## Usage

1. Start the Laravel development server:
    ```sh
    php artisan serve
    ```
2. Access the application at `http://localhost:8000`

## Contributing

1. Fork the repository.
2. Create a new branch:
    ```sh
    git checkout -b feature/your-feature-name
    ```
3. Commit your changes:
    ```sh
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```sh
    git push origin feature/your-feature-name
    ```
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
