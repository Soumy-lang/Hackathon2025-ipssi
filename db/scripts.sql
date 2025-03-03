CREATE TABLE Employes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    poste ENUM('Ouvrier', 'Chef de chantier', 'Administratif') NOT NULL,
    disponible BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE Chantier (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(150) NOT NULL,
    adresse TEXT NOT NULL,
    debut_travaux DATE NOT NULL,
    fin_travaux DATE NOT NULL,
    status ENUM('Planifié', 'En cours', 'Terminé') NOT NULL
);

CREATE TABLE Mission (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_chantier INT NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    status ENUM('Prévu', 'En cours', 'Terminé') NOT NULL,
    FOREIGN KEY (id_chantier) REFERENCES Chantier(id) ON DELETE CASCADE
);

CREATE TABLE Employes_Missions (
    id_employe INT NOT NULL,
    id_mission INT NOT NULL,
    PRIMARY KEY (id_employe, id_mission),
    FOREIGN KEY (id_employe) REFERENCES Employes(id) ON DELETE CASCADE,
    FOREIGN KEY (id_mission) REFERENCES Mission(id) ON DELETE CASCADE
);
