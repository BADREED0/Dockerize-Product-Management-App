# Dockerize-Product-Management-App


## Introduction
Ce projet utilise Docker pour automatiser déployer l'application web avec une base de données MySQL et un serveur Apache + PHP.


## Prérequis
- Docker
- Docker Compose


## Instructions
1. Créez un réseau Docker de type Bridge par la commande suivante:

  ```bash
  docker network create --subnet=192.168.3.0/24 --gateway=192.168.3.1 mon_reseau
  ```

2. Créez et démarrez les conteneurs par la commande suivante:
  ```bash
  docker-compose up 
  ```
  

3. Ouvrez votre navigateur et accédez à http://localhost:8000 pour utiliser l'application.

4. Arrêter les conteneurs par la commande suivante:
  ```bash
  docker-compose down
  ```
