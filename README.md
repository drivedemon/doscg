# doscg

Setup project for the first time
```
cd backend
```
Create `.env` file
```
cp .env.example .env
```
Access `env` file and change `API` key
```
GOOGLE_MAP_KEY="YOUR_API_KEY"
WEBHOOK_API="YOUR_API"
WEBHOOK_AUTH_TOKEN="YOUR_AUTH_TOKEN"
```
Install Dependencies
```
composer install
```
Migrate Data
```
php artisan migrate
```
Start backend server (You should see the backend up and running on  `localhost:8000`)
```
php artisan migrate
```
