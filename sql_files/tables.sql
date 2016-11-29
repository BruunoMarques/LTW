CREATE TABLE IF NOT EXISTS User{

    idUser interger,
    username text,
    password text,
    email text
};

CREATE TABLE IF NOT EXISTS Owner{

    idUser interger,
    idOwner interger
};

CREATE TABLE IF NOT EXISTS Reviewer{

    idUser interger,
    idReviewer interger,
    idRestaurante interger
};

CREATE TABLE IF NOT EXISTS Restaurant{

    idOwner interger,
    name text,
    inf text,
    photos text
};