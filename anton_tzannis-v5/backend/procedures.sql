-- SQLBook: Code
/* CREATION OF antonTzannis_addNewUserLogin PROCEDURE */
DELIMITER //
CREATE PROCEDURE antonTzannis_addNewUserLogin(
    IN userMailVar VARCHAR(50),
    IN userPasswordVar VARCHAR(60),
    IN firstNameVar VARCHAR (50),
    IN lastNameVar VARCHAR (50),
    IN userPhoneVar INT
    BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION, SQLWARNING
    BEGIN
        ROLLBACK;
        SELECT 'Rollback happened due to an error!' ErrorMessage;
    END;
    START TRANSACTION;
        INSERT INTO antonTzannis_userLogin (userMail, userPassword) 
        VALUES (userMailVar, userPasswordVar);
        INSERT INTO antonTzannis_userProfile (firstName, lastName, userPhone)
        VALUES (firstNameVar, lastNameVar, userPhoneVar);
    COMMIT;
END
DELIMITER;

/* DELETE antonTzannis_addNewUserLogin PROCEDURE */
DROP PROCEDURE `antonTzannis_addNewUserLogin`;

/* CREATION OF antonTzannis_newUserTreament PROCEDURE */
DELIMITER //
CREATE PROCEDURE antonTzannis_addNewUserTreatment(
    IN treatmentTypeVar VARCHAR(50),
    IN treatmentMinVar INT,
    IN treatmentPriceVar INT
)
BEGIN
    DECLARE EXIT HANDLER FOR SQLEXCEPTION, SQLWARNING
    BEGIN
        ROLLBACK;
        SELECT 'Rollback happened due to an error!' ErrorMessage;
    END;
    START TRANSACTION;
        INSERT INTO antonTzannis_userTreatment (treatmentType, treatmentMin, treatmentPrice) 
        VALUES (treatmentTypeVar, treatmentMinVar, treatmentPriceVar);
    COMMIT;
END   
DELIMITER;

/* DELETE antonTzannis_newUserTreament PROCEDURE */
DROP PROCEDURE `antonTzannis_addNewUserTreatment`;