## Laravel commands
```
php artisan route:list
```
Display all routes (URIs) defined in the application, web.php and api.php files

<br/>

```
php artisan make:migration <MIGRATION_FILE_NAME> Ex: `create_rooms_table`
```
Create new migration file to create new table in the database: Table name is 'rooms'

<br />

```
php artisan make:migration <MIGRATION_FILE_NAME> Ex: `add_phone_column_to_users_table`
```

Make new migration file to add a new column to an existing table

<br />

```
php artisan migrate
```

Execute migration files create before

<br />

```
php artisan make:model Models/Room
```

Create a new elquent model refers to a database table


