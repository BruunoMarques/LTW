CREATE TABLE IF NOT EXISTS USER(

    idUser INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT,
    firstname TEXT,
    lastname TEXT,
    password TEXT,
    email TEXT
);

CREATE TABLE IF NOT EXISTS RESTAURANT(

    idRestaurant INTEGER PRIMARY KEY AUTOINCREMENT,
    idOwner INTEGER,
    name TEXT,
    inf TEXT,
    phonenumber TEXT,
    averagecost TEXT,
    schedule TEXT,
    adress TEXT,
    categories TEXT,
    FOREIGN KEY (idOwner) REFERENCES USER(idUser)
);

CREATE TABLE IF NOT EXISTS REVIEW(

    idReview INTEGER PRIMARY KEY AUTOINCREMENT,
    idRestaurant INTEGER,
    idReviewer INTEGER,
    info TEXT,
    rating INTEGER,
    FOREIGN KEY (idRestaurant) REFERENCES RESTAURANT(idRestaurant),
    FOREIGN KEY (idReviewer) REFERENCES USER(idUser)
);

CREATE TABLE profilepic(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR REFERENCES user(username),
	title VARCHAR DEFAULT ""
);


CREATE TABLE restaurantpic (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	idRestaurant INTEGER REFERENCES restaurant(id),
	title VARCHAR DEFAULT ""
);