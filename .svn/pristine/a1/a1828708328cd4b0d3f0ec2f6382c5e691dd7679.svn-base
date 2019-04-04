
--Creation de la base de donnée

CREATE DATABASE my_streaming CHARACTER SET 'utf8';

CREATE TABLE Details_mov_ser (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Mov_ser INT(6) UNSIGNED,
    Title VARCHAR(150),
    Release_date DATE,
    Director INT(6) UNSIGNED,
    Actor INT(6) UNSIGNED,
    Kind INT(6) UNSIGNED,
    Nationality INT(6) UNSIGNED,
    Synopsis TEXT,
    Box_office INT(6),
    Age_limit INT(6)
    );

CREATE TABLE Kinds_all (
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(20)
	);

CREATE TABLE Mov_Kinds (
	ID_mov INT(6) UNSIGNED,
    ID_kind INT(6) UNSIGNED,
    FOREIGN KEY (ID_mov)
    REFERENCES Details_mov_ser(ID),
    FOREIGN KEY (ID_kind)
    REFERENCES Kinds_all(ID)
	);

CREATE TABLE Actors (
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	First_name VARCHAR(20),
	Last_name VARCHAR(20) 
	);

CREATE TABLE Mov_Actor (
	ID_mov INT(6) UNSIGNED,
    ID_actor INT(6) UNSIGNED,
    FOREIGN KEY (ID_mov)
    REFERENCES Details_mov_ser(ID),
    FOREIGN KEY (ID_actor)
    REFERENCES Actors(ID)
	);

CREATE TABLE Directors (
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	First_name VARCHAR(20),
	Last_name VARCHAR(20) 
	);

CREATE TABLE Mov_Director (
	ID_mov INT(6) UNSIGNED,
    ID_director INT(6) UNSIGNED,
    FOREIGN KEY (ID_mov)
    REFERENCES Details_mov_ser(ID),
    FOREIGN KEY (ID_director)
    REFERENCES Directors(ID)
	);

CREATE TABLE Nationality (
	ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Nation VARCHAR(30) 
	);

CREATE TABLE Mov_Nationality (
	ID_mov INT(6) UNSIGNED,
    ID_nationality INT(6) UNSIGNED,
    FOREIGN KEY (ID_mov)
    REFERENCES Details_mov_ser(ID),
    FOREIGN KEY (ID_nationality)
    REFERENCES Nationality(ID)
	);