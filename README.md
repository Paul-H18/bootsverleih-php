# Bootsverleih-php

## Installation

You need to have installed:
* Docker
* DDEV (https://docs.ddev.com/en/stable/users/install/)


#
### Create configs
* .ddev/config.local.yaml anlegen
  * ``host_db_port: "XXYYY"`` -> Database Port
* env -> .env


#
### Start project


```
cd bootsverleih-php

ddev start


# One time installation of composer libraries
ddev composer i 

# Or
ddev ssh -> composer i


# In future with JS support (Not currently!)
ddev npm i
```

