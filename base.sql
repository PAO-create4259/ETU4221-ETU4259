PRAGMA foreign_keys = ON;

-- =========================
-- Table: operateur
-- =========================
CREATE TABLE operateur (
    id_operateur INTEGER PRIMARY KEY AUTOINCREMENT,
    nom_operateur TEXT NOT NULL
);

-- =========================
-- Table: prefixe
-- =========================
CREATE TABLE prefixe (
    id_prefixe INTEGER PRIMARY KEY AUTOINCREMENT,
    id_operateur INTEGER NOT NULL,
    prefixe TEXT NOT NULL UNIQUE,
    FOREIGN KEY(id_operateur) REFERENCES operateur(id_operateur) ON DELETE CASCADE
);

-- =========================
-- Table: client
-- (ajout: solde + id_operateur pour connaitre le solde du compte
--  et l'operateur associe via le prefixe du numero)
-- =========================
CREATE TABLE client (
    id_client INTEGER PRIMARY KEY AUTOINCREMENT,
    numero TEXT UNIQUE NOT NULL,
    nom TEXT,
    solde REAL DEFAULT 0,
    id_operateur INTEGER,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id_operateur) REFERENCES operateur(id_operateur)
);

-- =========================
-- Table: type_operation
-- =========================
CREATE TABLE type_operation (
    id_type INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL
);

-- =========================
-- Table: bareme_frais
-- =========================
CREATE TABLE bareme_frais (
    id_bareme INTEGER PRIMARY KEY AUTOINCREMENT,
    id_type INTEGER NOT NULL,
    montant_min REAL,
    montant_max REAL,
    frais REAL,
    FOREIGN KEY(id_type) REFERENCES type_operation(id_type) ON DELETE CASCADE
);

-- =========================
-- Table: operation
-- =========================
CREATE TABLE operation (
    id_operation INTEGER PRIMARY KEY AUTOINCREMENT,
    id_type INTEGER NOT NULL,
    id_client_source INTEGER NOT NULL,
    id_client_destination INTEGER,
    montant REAL NOT NULL,
    frais REAL DEFAULT 0,
    date_operation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id_type) REFERENCES type_operation(id_type),
    FOREIGN KEY(id_client_source) REFERENCES client(id_client),
    FOREIGN KEY(id_client_destination) REFERENCES client(id_client)
);

-- =========================
-- Table: gain_operateur
-- (ajout: date_gain pour pouvoir filtrer les rapports par periode)
-- =========================
CREATE TABLE gain_operateur (
    id_gain INTEGER PRIMARY KEY AUTOINCREMENT,
    id_operation INTEGER,
    montant_frais REAL,
    date_gain DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(id_operation) REFERENCES operation(id_operation)
);

-- =========================
-- Donnees de base
-- =========================
INSERT INTO operateur (nom_operateur) VALUES ('Telma Money');
INSERT INTO operateur (nom_operateur) VALUES ('Orange Money');

INSERT INTO prefixe (id_operateur, prefixe) VALUES (1, '034');
INSERT INTO prefixe (id_operateur, prefixe) VALUES (1, '038');
INSERT INTO prefixe (id_operateur, prefixe) VALUES (2, '032');

INSERT INTO type_operation (nom) VALUES ('Depot');
INSERT INTO type_operation (nom) VALUES ('Retrait');
INSERT INTO type_operation (nom) VALUES ('Transfert');

-- Bareme exemple pour Retrait (id_type = 2)
INSERT INTO bareme_frais (id_type, montant_min, montant_max, frais) VALUES (2, 0, 5000, 100);
INSERT INTO bareme_frais (id_type, montant_min, montant_max, frais) VALUES (2, 5001, 20000, 300);
INSERT INTO bareme_frais (id_type, montant_min, montant_max, frais) VALUES (2, 20001, 100000, 800);

-- Bareme exemple pour Transfert (id_type = 3)
INSERT INTO bareme_frais (id_type, montant_min, montant_max, frais) VALUES (3, 0, 5000, 50);
INSERT INTO bareme_frais (id_type, montant_min, montant_max, frais) VALUES (3, 5001, 20000, 200);
INSERT INTO bareme_frais (id_type, montant_min, montant_max, frais) VALUES (3, 20001, 100000, 500);

