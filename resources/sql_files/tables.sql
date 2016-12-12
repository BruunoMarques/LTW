CREATE TABLE IF NOT EXISTS USER(

    idUser INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT,
    password TEXT,
    email TEXT
);

CREATE TABLE IF NOT EXISTS RESTAURANT(

    idRestaurant INTEGER PRIMARY KEY AUTOINCREMENT,
    idOwner INTEGER,
    name TEXT,
    inf TEXT,
    photos TEXT,
    phoneNumber TEXT,
    averageCost TEXT,
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
