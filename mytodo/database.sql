CREATE DATABASE mytodos;

USE mytodos;

CREATE TABLE todos (id INTEGER PRIMARY KEY AUTO_INCREMENT, description TEXT NOT NULL, completed boolean NOT NULL);