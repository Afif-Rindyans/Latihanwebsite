# Showroam

## How to run in development

### 1. Install Library Database Migration  
  Database migration from [Phinx](https://book.cakephp.org/phinx/0/en/index.html)  
  - Install using [composer](https://getcomposer.org/download/)
  - Type command line in your terminal
    ```sh
    composer install
    ```

### 2. Create Database
  In this case i make database name `showroam_db`.  
  If you create a different database name, you must change `'name' => 'showroam_db'` in [phinx.php](./phinx/php), according to the database name you created `'name' => '<YOUR_DATABASE_NAME>'`.

### 3. Set Config
  ```sh
  vendor/bin/phinx test
  ```

### 4. Run Migration
  ```sh
  vendor/bin/phinx migrate -e development
  ```

### 5. Run Seed  
  To generate dummy data

  ```
  vendor/bin/phinx seed:run
  ```

  If you want clear all seed/data on any table. Change all code any ...Seeder.php on [app/config/database/seeds/](app/config/database/seeds/) to this.
  ```
  $posts = $this->table('table_name');
  //$posts->insert($data)->saveData();

  // empty data
  $posts -> truncate();
  ```

  Run this command after change all code ...Seeder.php to running clear all data.
  ```
  vendor/bin/phinx seed:run
  ```

### 6. Setting Database Environment Variables
- Copy file `.env.example` at [app/config/database/env.example]((app/config/database/.env.example))
- Rename file `.env copy.example` to `.env`  
- Change name database  
  
   Example app/config/database/.env:
   ```sh
     HOSTNAME_DATABASE=localhost
     USERNAME_DATABASE=root
     PASSWORD_DATABASE=
     NAME_DATABASE=my_database
   ```

### 7. Setting API Environment Variable
- Copy file `.env.example` at [app/config/api/env.example]((app/config/api/env.example))
- Rename file `.env copy.example` to `.env`
- Get API Key from [coinmarketcap.com](https://coinmarketcap.com/api/pricing/)  
  Example app/config/api/.env
  ```
  API_KEY=<YOUR_API_KEY>
  API_URL=https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest
  ```
