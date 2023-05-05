--- TUTORIAL MENJALANKAN WEB YANG SUDAH DIBUAT---
1. OPEN MYSQL SERVER ( YOU CAN USE XAMPP )
2. GO TO APPLICATION FOLDER :
	- composer install 
	- edit .env and make the same with your mysql database
	- php artisan migrate:fresh --seed
	- npm install
	- npm run dev
	- php artisan serve
