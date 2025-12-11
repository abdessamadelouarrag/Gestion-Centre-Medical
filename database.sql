CREATE DATABASE cantremedical;
USE cantremedical;

CREATE TABLE `utilisateurs` (
	`id_utilisateur` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(50),
	`prenom` VARCHAR(50),
	`type_utilisateur` VARCHAR(20) NOT NULL);

CREATE TABLE `rendezvous` (
	`id_rdv` INT PRIMARY KEY AUTO_INCREMENT,
	`id_patient` INT NULL DEFAULT NULL,
	`id_medecin` INT NULL DEFAULT NULL,
	`date_rdv` DATE NOT NULL,
	`statut` BOOLEAN NOT NULL,
    FOREIGN KEY (id_patient) REFERENCES utilisateurs(id_utilisateur),
    FOREIGN KEY (id_medecin) REFERENCES utilisateurs(id_utilisateur));


CREATE TABLE `factures` (
	`id_facture` INT PRIMARY KEY AUTO_INCREMENT,
	`id_rdv` INT,
	`montant` DECIMAL(12,3) NOT NULL,
	`date_facture` DATE NOT NULL,
    FOREIGN KEY (id_rdv) REFERENCES rendezvous(id_rdv));

INSERT INTO utilisateurs (nom, prenom, type_utilisateur) VALUES (
    ('Elouarrag', 'Abdessamad', 'patient'),
    ('Benali', 'Sara', 'medecin'),
    ('Hassan', 'Youssef', 'patient'),
    ('Amrani', 'Khadija', 'medecin'),
    ('Ouarghi', 'Imane', 'patient'));

INSERT INTO rendezvous (id_patient, id_medecin, date_rdv, statut) VALUES (
    (1, 2, '2025-12-15', 1),
    (3, 4, '2025-12-16', 0),
    (5, 2, '2025-12-17', 1),
    (1, 4, '2025-12-18', 0),
    (3, 2, '2025-12-19', 1));

select * from utilisateurs inner join rendezVous 
on utilisateurs.id_utilisateur = rendezVous.id_patient 
WHERE nom = "elouarrag";

select utilisateurs.nom, utilisateurs.prenom, rendezVous.date_rdv, rendezVous.statut 
from utilisateurs inner join rendezVous
on utilisateurs.id_utilisateur = rendezVous.id_patient;