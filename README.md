##guide

# Copy .env.example .env
cp .env.example .env

# Run composer
composer install & composer update

# Generate Key
php artisan key:generate

# Migration
php artisan migrate --seed

# Install npm Package
npm install

# Build Webpack In Dev
npm run dev
