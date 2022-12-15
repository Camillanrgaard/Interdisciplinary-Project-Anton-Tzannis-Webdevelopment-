-- SQLBook: Code
/* CREATION OF antonTzannis_userProfile TABEL */
CREATE TABLE antonTzannis_userProfile(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    userPhone INT
);
/* ADD COLUMN userBooking IN userProfile TABEL */
ALTER TABLE antonTzannis_userProfile
    ADD userBooking INT;

/* RESET userProfile TABEL */
TRUNCATE TABLE antonTzannis_userProfile;
/* ------------------------------------ */

/* CREATION OF antonTzannis_userLogin TABEL */
CREATE TABLE antonTzannis_userLogin(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userMail VARCHAR(50),
    userPassword VARCHAR(60)
);

/* RESET userLogin TABEL */
TRUNCATE TABLE antonTzannis_userLogin;
/* ------------------------------------ */

/* CREATION OF antonTzannis_userTreatment TABEL */
CREATE TABLE antonTzannis_userTreatment(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    treatmentType VARCHAR(50),
    treatmentMin INT,
    treatmentPrice INT
);

/* RESET antonTzannis_userTreatment TABEL */
TRUNCATE TABLE antonTzannis_userTreatment;
