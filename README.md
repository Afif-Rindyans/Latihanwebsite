# Showroam

## How to run in development

### Setting Environment Variables
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