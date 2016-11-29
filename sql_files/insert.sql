.bail ON
.mode collumns
.headers ON
.nullvalue NULL 
PRAGMA foreign_keys = ON;

INSERT INTO USER(idUser,username,password,email) VALUES(1,'ariana','12345','ariana@gmail.com');
INSERT INTO USER(idUser,username,password,email) VALUES(2,'bruno','123456','bruno@gmail.com');
INSERT INTO USER(idUser,username,password,email) VALUES(3,'diogo','1234567','diogo@gmail.com');

INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(1,1,2,'Muito bom!!',5);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(2,2,1,'Pessimo',1);

INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,photos)
       VALUES(1,3,'O Pinheiro','Acolhedor, comida italiana, bom espaço',' ')
INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,photos)
       VALUES(2,3,'A gulosa','Venha experimentar a melhor comida do Dubai pelo chef Pingu Carneiro','2')