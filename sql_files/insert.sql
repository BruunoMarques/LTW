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
           'O Mineiro',
           'Segundo a cliente Miriam , o melhor restaurante do Porto!',
           '225654789',
           '7€ per person',
           'Everyday',
           'Rua Central, nº304, Valongo',
           'Casual'
           );
INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           4,
           3,
           'Pra la Caminha',
           'O melhor spot do mundo em Moledo do Minho!',
           '258753159',
           '10€ per person',
           'Everyday 9.30a.m to 2a.m',
           'Paredao de Moledo, nº24, Caminha',
           'Cafe de Praia'
           );
INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           5,
           3,
           'Hamilton',
           'A melhor pizzaria de Portugal. Venha conhecer Italia. As melhores pizzas e o melhor licor limoncelo!',
           '200879632',
           '16€ per person',
           'Wensday-Sunday, 11.am to 22p.m',
           'Praça do Comercio, nº986,Lisboa',
           'Casual'
           );

INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           6,
           3,
           'daTerra',
           'Encontre o melhor Restaurante Vegetariano do pais',
           '214569852',
           '15€ per person',
           'Everyday, just lunch',
           'Rua das Flores, nº6,Porto',
           'Vegetariano'
           );

INSERT INTO RESTAURANT(idRestaurant,idOwner,name,inf,phonenumber,averagecost,schedule,adress,categories)
       VALUES(
           7,
           3,
           'Yoku',
           'As melhores francesinhas da invicta!',
           '221368456',
           '15€ per person',
           'Everyday, lunch and dinner',
           'Praça da Areosa, nº46, Porto',
           'Comida Tradicional'
           );


INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(1,4,1,'Muito bom!!',5);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(2,4,2,'Optimo!!',5);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(3,1,1,'Pessimo',1);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(4,2,2,'Gostei do espaço e do serviço, no entanto o menu podia ter sido melhor..',3);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(5,3,1,'Normal, muitos aspectos a melhorar...',3);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(6,5,2,'A melhor pizzaria do pais, adorei! Ideal para familias ou casais! Espaço muito agradavel e acolhedor',5);
INSERT INTO REVIEW(idReview,idRestaurant,idReviewer,info,rating)
       VALUES(7,6,2,'Para quem aprecia comida vegetariana aconselho ! Muito bom',5);