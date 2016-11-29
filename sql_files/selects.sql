/*Select users*/
SELECT DISTINCT * FROM USER;

/* Count users*/
SELECT Count (*) FROM USER;

/*Select restaurants*/
SELECT DISTINCT * FROM RESTAURANT;

/* Count restaurants*/
SELECT Count (*) FROM RESTAURANT;

/*Select reviews*/
SELECT DISTINCT * FROM REVIEW;

/* Count reviews*/
SELECT Count (*) FROM REVIEW;

/* Select de todos os diferentes reviewers*/
SELECT DISTINCT USER.username FROM USER INNER JOIN REVIEW ON REVIEW.idReviewer = USER.idUser;

/* Select de todos os diferents owners*/
SELECT DISTINCT USER.username FROM USER INNER JOIN RESTAURANT ON RESTAURANT.idOwner = USER.idUser;

/* Select reviews and reviewer*/
SELECT DISTINCT * FROM REVIEW INNER JOIN USER ON REVIEW.idReviewer = USER.idUser;

/* Select reviews and restaurants*/
SELECT DISTINCT * FROM REVIEW INNER JOIN RESTAURANT ON REVIEW.idRestaurant = RESTAURANT.idRestaurant;
