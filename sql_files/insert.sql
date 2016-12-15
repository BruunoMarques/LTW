.bail ON
.headers ON
.nullvalue NULL 
PRAGMA foreign_keys = ON;

INSERT INTO USER(idUser,username,firstname, lastname, password,email) VALUES(1,'ariana','Ariana','Fernandes', '12345','ariana@gmail.com');
INSERT INTO USER(idUser,username,firstname, lastname, password,email) VALUES(2,'bruno','Bruno', 'Marques', '123456','bruno@gmail.com');
INSERT INTO USER(idUser,username,firstname, lastname, password,email) VALUES(3,'diogo','Diogo', 'Carneiro', '1234567','diogo@gmail.com');

INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           1,
           3,
           'O Pinheiro',
           'Acolhedor, comida italiana, bom espaço',
           '222379421',
           '20€ per person',
           'Everyday 11a.m to 12p.m',
           'Avenida da Boavista, nª2300, Porto',
           'Italiano'
       );
INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           2,
           3,
           'A gulosa',
           'Venha experimentar a melhor comida do Dubai pelo chef Pingu Carneiro',
           '213458900',
           '100€ per person',
           'Only friday and weekend evening',
           'Pinhais da Foz, nº304, Porto',
           'Casual'
           );

		   INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           3,
           3,
           'A gulosa',
           'Venha experimentar a melhor comida do Dubai pelo chef Pingu Carneiro',
           '213458900',
           '100€ per person',
           'Only friday and weekend evening',
           'Pinhais da Foz, nº304, Porto',
           'Casual'
           );
INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           4,
           3,
           'A gulosa',
           'Venha experimentar a melhor comida do Dubai pelo chef Pingu Carneiro',
           '213458900',
           '100€ per person',
           'Only friday and weekend evening',
           'Pinhais da Foz, nº304, Porto',
           'Casual'
           );
INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           5,
           3,
           'A gulosa',
           'Venha experimentar a melhor comida do Dubai pelo chef Pingu Carneiro',
           '213458900',
           '100€ per person',
           'Only friday and weekend evening',
           'Pinhais da Foz, nº304, Porto',
           'Casual'
           );

INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(1,1,2,'Muito bom!!',5);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(2,2,1,'Pessimo',1);

