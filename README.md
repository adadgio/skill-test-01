skill-test-01
=============

A Symfony project created on July 2, 2018, 11:03 am. Test your skills !

## Setting up permissions

See: http://symfony.com/doc/2.8/setup/file_permissions.html


### Skill test

A partir du projet Symfony 2.8, réaliser une API rapide avec les fonctionalités suivantes:

Enpoint:

- GET /rest/users           Liste des utilisateurs
- GET /rest/user/{id}       Retourne un objet user (garder la BDD très simple, un object à deux/trois champs suffit)
- POST /rest/users/{id}     Modifie les champs users passé en POST

- Le controller doit être le plus léger possible: utiliser un event listener à partir du controller pour simuler la logique qui récupère l'utilisateur.

- L'API doit retourner du JSON
- Il est demandé de créer un service "Serializer" par soit même à utiliser pour retourner une réponse JSON à partir d'un objet (qui pourra être un User mais aussi n'importe quel autre entité potentielle !)

- Sans coder: donnez quelques techniques qui permettraient de sécuriser l'API
