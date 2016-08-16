# vet dir api

##Generate key in .env file

php artisan key:generate

##How to deal with the .env file in Heroku?

heroku config:set APP_ENV=local

heroku config:set APP_DEBUG=true

heroku config:set APP_KEY=SomeRandomString

heroku config:set APP_URL=http://localhost

###Database variables in Heroku

heroku config:set DB_CONNECTION=mysql

heroku config:set DB_HOST=127.0.0.1

heroku config:set DB_PORT=3306

heroku config:set DB_DATABASE=homestead

heroku config:set DB_USERNAME=homestead

heroku config:set DB_PASSWORD=secret

##Run database migrations

php artisan migrate

### Create migrations

php artisan make:migration create_category_table

php artisan make:migration create_languages_per_country_table

php artisan make:migration create_category_translation_table

php artisan make:migration create_venues_table

## endpoints

http://192.168.33.10/vet-dir-api/public/test/venue-search/km

http://192.168.33.10/vet-dir-api/public/test/venue-search/mi

http://192.168.33.10/vet-dir-api/public/api/venues/5032897c91d4c4b30a586d69/params/lat=6.23&lng=-75.59&unit=Kilometers&distance=2

https://vet-dir-api.herokuapp.com/api/venues/5032897c91d4c4b30a586d69/params/lat=6.23&lng=-75.59&unit=Kilometers&distance=2
