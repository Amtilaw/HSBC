# HSBC Web application | Application web

Cette application est développée avec l'aide du framework symfony.
## Prérequis | Dependance
Votre ordinateur a besoin des applications suivantes déjà installées : 
1) Git , composer, xampp

## Installation
### Si vous utilisez Windows

1) L’application doit être connectée à une base de données 
 Lancer XAMPP control panel & lancer Apache et MyQSL

  2)Ouvrez l'invité de commande en recherchant "cmd"

![Alt text](resourceReadme/WindowsCmdOpen.jpeg?raw=true "CmdSearch")

3) Copiez les commandes ci-dessous dans l'invité commande

```bash
git clone https://github.com/Amtilaw/HSBC.git 
cd HSBC
composer install   
php bin/console doctrine:database:create    
php bin/console make:migration             
php bin/console doctrine:migration:migrate
php -S 127.0.0.1:9000 -t public          
```

4) Lancez votre navigateur web et entrez l'adresse suivante: http://127.0.0.1:9000/contact/view

### Si vous utilisez Linux
1) Ouvrez votre terminal
```bash
sudo /opt/lampp/lampp start         # Lance XAMPP
git clone https://github.com/Amtilaw/HSBC.git
cd HSBC
chmod +x install.bash               # Permission pour l'éxecution du script
./install.bash                      # Install les bundles & la base de donnée 
php -S 127.0.0.1:9000 -t public     # Lance le server web en local
```

2) Lancez votre navigateur web et entrez l'adresse suivante: http://127.0.0.1:9000/contact/view

Sinon vous pouvez visiter l'application à l'adresse suivante : http://94.224.78.233/HSBC/public/contact/view
