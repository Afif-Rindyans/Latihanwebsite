# Showroam

## How to run in development

### 1. Setting Database Environment Variables
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
### 2. Setting API Environment Variable
- Copy file `.env.example` at [app/config/api/env.example]((app/config/api/env.example))
- Rename file `.env copy.example` to `.env`
- Get API Key from [coinmarketcap.com](https://coinmarketcap.com/api/pricing/)  
  Example app/config/api/.env
  ```
  API_KEY=<YOUR_API_KEY>
  API_URL=https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest
  ```