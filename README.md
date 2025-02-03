# 🪪Kata DNI
Kata_DNI is an application developed in Laravel that allows to calculate the letter corresponding to a DNI number. It uses an API to return the result in JSON format.

## 🔎📝 Installation Requirements

In order to run this project locally, you need:

1. XAMPP (or any other local server that supports PHP and MySQL)

2. VSC Terminal

3. Composer

4. Node.js (install npm)

5. Postman (or any other platform to use for API)

## 🔧⚙️ Installation

1. Install project with git clone

```bash
  git clone https://github.com/mrene42/Kata-DNI.git
``` 

2. Install composer:

```
composer install
``` 

3. Install NPM:

```
npm install
``` 

4. Create an ".env" by taking the example ".env.example" file and modify:

- DB_CONNECTION=mysql
- DB_DATABASE=kata_dni

>[!IMPORTANT]
>You can create the database name as you wish, just remember to include that name in the ‘database’ in the ‘.env’ file and uncomment the paragraph.

5. Create a database in MySQL
- In the database manager “phpMyAdmin” of MySQL create only the database without tables.
- Generate the tables from the terminal and then run migrate to upload the changes to the database.

6. Migrate the tables:

```
php artisan migrate:fresh --seed
```

7. Run Locally:

-   Run NPM in one terminal.
```
npm run dev
```
-   Run Laravel in another terminal.
```
php artisan serve
```
## 📡🌐 API Endpoints
With the API by entering only the numbers of the DNI in Postman we can obtain the letter that corresponds to the DNI.

**GET** : 
```
http://127.0.0.1:8000/api/assign/{id}
```
<img width="626" alt="image" src="https://github.com/user-attachments/assets/576343a1-d926-4f8e-bc3f-d9d4c81d9cac" />

- You have to enter 8 numbers otherwise you will get a text saying ‘Introduce a valid number’.
<img width="626" alt="image" src="https://github.com/user-attachments/assets/7c654a23-9cc9-41ed-b51d-de2b6812a2f7" />


## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)

To run the project tests, use the following command:

```
    php artisan test --coverage
```

- This project has a **100%** of test coverage.
<img width="539" alt="test_coverage" src="https://github.com/user-attachments/assets/766652cb-cdde-472c-b582-f9404b14eb0d" />


## 📊📁 Diagrams made (BBDD)
<img width="215" alt="database_kata_DNI" src="https://github.com/user-attachments/assets/ecae4eeb-d145-4460-9d58-150230bd9dea" />

## 🛠️🚀 Tech and tools
<a href='#777BB4' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=FFFFFF&labelColor=8892be&color=8892be'/></a>
<a href='#4479A1' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=00758f&color=00758f'/></a>
<a href='#FF2D20' target="_blank"><img alt='LARAVEL' src='https://img.shields.io/badge/LARAVEL-100000?style=for-the-badge&logo=LARAVEL&logoColor=white&labelColor=F05340&color=F05340'/></a>
<a href='visual studio code' target="_blank"><img alt='VSC' src='https://img.shields.io/badge/VSC-100000?style=for-the-badge&logo=VSC&logoColor=white&labelColor=0277BD&color=0277BD'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=8f6447&color=8f6447'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='node.js' src='https://img.shields.io/badge/Node.js-100000?style=for-the-badge&logo=node.js&logoColor=white&labelColor=82cc27&color=82cc27'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>

## ✍️🙍 Author
[René Barco](https://github.com/mrene42)


