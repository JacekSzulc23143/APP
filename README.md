# APP
## Baza do zadania
```SQL
CREATE DATABASE IF NOT EXISTS appStore;

USE appStore;

CREATE TABLE IF NOT EXISTS users (
    iduser INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50),
    nazwisko VARCHAR(50),
    email VARCHAR(70),
    login VARCHAR(50),
    password VARCHAR(50)
);


INSERT INTO users (imie, nazwisko, email, login, password) 
VALUES 
    ('Jan', 'Kowalski', 'jan@wp.pl', 'janek', '1234'),
    ('Franek', 'Kowalski', 'franek@wp.pl', 'franek', '1234'),
    ('Ola', 'Kowalska', 'ola@wp.pl', 'ola', '1234'); 
```