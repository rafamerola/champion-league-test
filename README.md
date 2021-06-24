# About

This repository is created for the case study.

## Install
#### 1. Clone the repository

```bash
git clone https://github.com/gdegirmenci/laravel-champions-league.git
cd champ
```

#### 2. Set .env
```bash
cp .env.example .env
```

#### 3. Install requirements
```bash
composer install
npm install
```

#### 4. Build and run Docker
```bash
cd dock
docker-compose build
docker-compose up -d
```

#### 5. Set DB Host
After creating .env file, please run the command below and get your local IP for DB host

For MacOS and Linux
```
ifconfig
```

For Windows
```
ipconfig
```

Inside .env file, find the line 10
```dotenv
DB_HOST=192.168.x.x
```


#### 6. Database Migrations
```bash
php artisan migrate
```

## Usage
- Before usage, please run the command for serve front-end
```
npm run watch
```

- Create some entries inside clubs table like
```
#name           #attack_power   #defense_power
Galatasaray     70              80
Fenerbahçe      80              70
Beşiktaş        80              70
Trabzonspor     70              60
```

- Create the initial fixture
```
localhost:8180/api/create
```

- Go to application and start the league
```
localhost:8180
```