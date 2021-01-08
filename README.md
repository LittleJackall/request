# PHP request system :
Une page php qui permet d'envoyer des informations sur une database MySQL .

Ce script en php permet d'envoyer des données mis dans un input sur une page web dans une base de données.
Si le champ imput n'est pas remplis, il va mettre un message d'erreur.

## Installation :

### Etape 1:

créer une base de données et prendre les informations de connection(lien, utilisateur, password, nom de la base de données).
Créez une table dans la base de données qui se nomme "msg" et mettez une seule colone qui se nommera message.
Une fois que c'est fait mettez la colone sur varchar et définissez le nombre de charactères à 250.

### Etape 2:

Mettez les informations de connection dans votre ficher index.php.

##### Exemple :
`$servername = "localhost/Lien";
$username = "Username";
$password = "Le mot de passe de l'utilisateur";
$dbname = "Le nom de la base de donnée";
echo = "test";`

Hébergez le ficher sur votre hébergeur et allez au chemin du ficher.
