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

# Migrations und Seeder
ddev php spark migrate
ddev php spark db:seed TestUserSeeder
```


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