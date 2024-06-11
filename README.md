# Charles-E-commerce

E-commerce est une application web développée en PHP suivant le modèle MVC (Modèle-Vue-Contrôleur). Elle permet aux utilisateurs de naviguer parmi les produits, d'ajouter des articles à leur panier, de passer des commandes et de gérer leurs achats. Ce projet met en œuvre des fonctionnalités essentielles d'un site e-commerce et démontre la maîtrise des concepts fondamentaux du développement web.

Fonctionnalités
Navigation des produits : Parcourez une liste de produits avec leurs détails.
Gestion du panier : Ajoutez des produits au panier, modifiez les quantités et visualisez le total.
Passation de commandes : Transformez le contenu du panier en commande.
Authentification des utilisateurs : Inscription avec cryptage des mots de passe, connexion et déconnexion sécurisées.
Suivi des commandes : Visualisez l'historique des commandes passées par un utilisateur.
Séparation des responsabilités : Implémentation du modèle MVC pour une structure de code claire et maintenable.
Technologies utilisées
PHP : Langage principal pour le développement backend.
MySQL : Base de données pour stocker les informations des utilisateurs, produits, paniers et commandes.
HTML/CSS : Structure et style des pages web.
Bootstrap : Framework CSS pour un design réactif et moderne.
Installation
Clonez le repository :
bash
Copier le code
git clone https://github.com/votre-utilisateur/E-commerce.git
Naviguez dans le répertoire du projet :
bash
Copier le code
cd E-commerce
Importez le fichier database.sql dans votre base de données MySQL pour créer les tables nécessaires.
Configurez les paramètres de connexion à la base de données dans model/Connection.php :
php
Copier le code
class Connection {
    public static function getConnect() {
        try {
            $db = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "votre-mot-de-passe");
        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }
        return $db;
    }
}
Démarrez votre serveur local (par exemple, XAMPP) et placez le projet dans le répertoire accessible par le serveur.
Accédez à l'application via votre navigateur web :
bash
Copier le code
http://localhost/E-commerce/gestion/index.php
Utilisation
Inscription : Créez un compte utilisateur sur la page d'inscription.
Connexion : Connectez-vous avec vos identifiants.
Navigation des produits : Parcourez la liste des produits disponibles.
Ajout au panier : Ajoutez des produits à votre panier.
Gestion du panier : Modifiez les quantités et visualisez le total du panier.
Passation de commande : Cliquez sur "Passer commande" pour transformer votre panier en commande.
Suivi des commandes : Consultez l'historique de vos commandes passées.
Contributions
Les contributions sont les bienvenues ! N'hésitez pas à ouvrir des issues pour signaler des bugs ou proposer des améliorations.
