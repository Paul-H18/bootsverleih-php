# Bootsverleih-php

### Installation
Es müssen Docker, sowie DDEV installiert sein.

```
# Projekt starten
ddev start

# Composer dependencies laden
ddev composer install

# npm dependencies laden
npm install

# JavaScript bauen
npm run build       # einmalig
npm run dev         # zum Entwickeln

# Migrations und Seeder
ddev php spark migrate

ddev php spark db:seed TestUserSeeder
ddev php spark db:seed PierSeeder
```
Das Auführen des PierSeeders ist nötig zum nutzen der Applikation!


### Ausschalten
```
ddev stop
```

### Info über Container
```
ddev describe

# Oder Docker:
docker ps
```