## Test project 

just run `docker-compose up -d --build` from root directory (for mac-os change `localhost` to `host.docker.internal`)

#### Migrations
For run migrations just run `docker-compose exec php php artisan migrate:fresh` from root directory

#### Seeds
For run seeds just run `docker-compose exec php php artisan db:seed` from root directory

#### Profit
Application available at http://localhost:8080
<br>Result of test presented at http://localhost:8080/users
