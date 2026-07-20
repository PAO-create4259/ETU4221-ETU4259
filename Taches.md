VERSION1:

#4259 
    -Comprehension du sujet
    -copier coller la base d' un projet codeigniteur dans le dossier github
    -Definir les differentes tables de la base de donne
    -Concevoir les tables de la bases de donne
    -Ecrire le fichier base.sql
            2-app/Views/Operateur/ListeClients.php:
                -Tableau de listes clients: Nom,Numero,Solde 
                -Bouton "Detail" qui redirige vers HistoriqueClient.php

            -app/Views/Operateur/HistoriqueClient.php:
                -Affichage dynamique des operations requises par le clients 
                -Filtre date 

            -app/Controllers/Operateur/Operateur.php:
                -Ajout de methode listeClient et HistoriqueClient

            -app/Models/Operateur/ClientModel.php:
            -app/Models/OperationModel.php: qui recupere les infos client de la table operation
            -mis a jour app/Config/Routes.php

#4221
    -comprehension du sujet
    -Definir les tables de la base de donnees
    -Creation du fichier :
        -Cote operateur: Views/Operateur
            1-Dashboard.php = page qui affiche les gains obtenus via les frais
                -Affichage dynamique du total des gains en general
                -Affichage dynamique du total des gains obtenus via retrait
                -Affichage dynamique du total des gains obtenue via transfert
                -Filtre par date des gains
                -Mis a jour des totaux pour chaque resultat du filtre

            -app/Controllers/Operateur/Operateur.php:
                -recevoir la demande de la page
                -recuperer les donnees depuis le modele

            -app/Models/Operateur/GainModel.php:
                -communiquer avec la base de donnees
                -calcule les gains

            -app/Config/Routes.php
    
    -COTE CLIENT:
#4259     1-Views/Client/login.php:
                - Saisie du numero de telephone
                - Authentification du client
                - Affichage d'un message d'erreur si le numero est introuvable
                - Redirection automatique vers le Dashboard apres connexion
            -app/Controllers/Client/AuthController.php:
                - Recuperer le numero saisi
                - Verifier si le client existe via ClientModel
                - Creer la session du client
                - Rediriger vers le Dashboard
                - Gerer la deconnexion (destroy session)
            -app/Controllers/Client/DashboardController.php:
                - Verifier que le client est connecte
                - Recuperer les informations du client
                - Afficher le solde actuel
                - Rediriger vers les pages Depot, Retrait, Transfert et Historique
            -app/Controllers/Client/OperationController.php:
                - Afficher le formulaire de depot
                - Afficher le formulaire de retrait
                - Afficher le formulaire de transfert
                - Calculer les frais selon le bareme
                - Mettre a jour le solde du client
                - Enregistrer l'operation dans la table operation
                - Enregistrer les frais dans gain_operateur

#4221       -app/Models/Client/ClientModel.php:
                - Rechercher un client par numero
                - Recuperer les informations d'un client
                - Consulter le solde
                - Mettre a jour le solde du client
            -app/Models/Client/OperationModel.php:
                - Enregistrer les operations
                - Recuperer l'historique des operations
                - Calculer les frais selon le type d'operation
            -Views/Client/dashboard.php:
                - Afficher le nom du client
                - Afficher le solde disponible
                - Bouton Depot
                - Bouton Retrait
                - Bouton Transfert
                - Bouton Historique
                - Bouton Deconnexion
            -Views/Client/depot.php:
                - Saisie du montant
                - Validation du depot
                - Message de confirmation
            -Views/Client/retrait.php:
                - Saisie du montant
                - Verification du solde
                - Validation du retrait
                - Message de confirmation
            -Views/Client/transfert.php:
                - Saisie du numero du destinataire
                - Saisie du montant
                - Verification du destinataire
                - Verification du solde
                - Calcul automatique des frais
                - Validation du transfert



#4259        -Views/Client/historiqueClient.php:
                - Afficher toutes les operations du client
                - Afficher le type d'operation
                - Afficher le montant
                - Afficher les frais
                - Afficher la date de l'operation
                - Trier les operations de la plus recente a la plus anciennent.php

VERSION2: 
#4221-COTE OPERATEUR:
            -Creation des tables: commission_inter_operateur ; situation_operateur
            -Ajout de colonne dans operation : commission_inter et inter_operateur
            -Views/Operateur/configurationPrefixe.php:
                - Ajouter un nouveau prefixe
                - Modifier / Supprimer un prefixe
                - Associer un prefixe a un operateur
            -app/Controllers/Operateur/ConfigurationPrefixeController.php:
                - Verifier les donnees saisies
                - Ajouter / Modifier / Supprimer un prefixe
            -app/Models/Operateur/PrefixeModel.php:
                - Recuperer la liste des prefixes
                - Ajouter / Modifier / Supprimer un prefixe
                - Verifier qu'un prefixe n'existe pas deja
            -Views/Operateur/ConfigurationCommission.php:
                - Configurer le pourcentage de commission des transferts vers un autre operateur
                - Modifier le pourcentage de commission
            -app/Controllers/Operateur/CommissionController.php:
                - Modifier le pourcentage de commission
            -app/Models/Operateur/CommissionModel.php:
                - Communiquer avec la base de donnees
                - Recuperer le pourcentage de commission
            -Views/Operateur/Dashboard.php:
                - Separer les gains obtenus avec les clients du meme operateur
                - Separer les gains obtenus avec les autres operateurs
                - Afficher le total des gains par categorie
                - Mettre a jour les montants apres un filtre par date
            -app/Models/Operateur/GainModel.php:
                - Calculer les gains provenant des operations internes
                - Calculer les gains provenant des operations inter-operateurs
                - Calculer le total general des gains
                - Filtre des gains
            -Views/Operateur/SituationOperateur.php:
                - Afficher le nom de l'operateur
                - Afficher le montant total
                - Afficher la periode concernee
                - Filtre par date
            -app/Controllers/Operateur/SituationOperateurController.php:
                - Recuperer les montants a reverser
                - Gerer le filtre par date
            -app/Models/Operateur/SituationOperateurModel.php:
                - Calculer les montants a reverser a chaque operateur
                - Regrouper les montants par operateur
                - Retourner les resultats au controleur

#4259 -COTE CLIENT:
            -option inclure frais de retrait lors de l envoie
            -pa de frais de retrait pour les autres operateurs

            -envoie multiple vers plusieur numero(diviser le montant pour chaque numeroo)
                -meme operateur uniquement
            
                

            
            
                
