CREATE TABLE IF NOT EXISTS USER{

    idUser INTEGER NOT NULL PRIMARY KEY,
    username TEXT,
    password TEXT,
    email TEXT
};

CREATE TABLE IF NOT EXISTS REVIEW{

    idReview INTEGER NOT NULL PRIMARY KEY,
    idRestaurant INTEGER NOT NULL,
    idReviewer INTEGER NOT NULL,
    info TEXT,
    rating INTEGER 
    FOREIGN KEY (idRestaurant) REFERENCES RESTAURANT(idRestaurant),
    FOREIGN KEY (idReviewer) REFERENCES USER(idUser)
};

CREATE TABLE IF NOT EXISTS RESTAURANT{

    idRestaurant INTEGER NOT NULL PRIMARY KEY,
    idOwner INTEGER NOT NULL,
    name TEXT,
    inf TEXT,
    photos TEXT,
    FOREIGN KEY (idOwner) REFERENCES USER(idUser)
};