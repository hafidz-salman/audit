#!/bin/bash

echo "🚀 Setting up Laravel with Docker..."

# Generate APP_KEY if not exists
if ! grep -q "APP_KEY=base64:" .env; then
    echo "📝 Generating application key..."
    docker compose run --rm app php artisan key:generate
fi

# Build and start containers
echo "🔨 Building Docker containers..."
docker compose up --build -d

# Wait for database to be ready
echo "⏳ Waiting for database to be ready..."
sleep 10

# Run migrations
echo "🗄️ Running database migrations..."
docker compose exec app php artisan migrate --force

echo "✅ Setup complete!"
echo "🌐 Application is running at: http://localhost:8000"
echo "🔧 PgAdmin is available at: http://localhost:8081"
echo "   Email: admin@gmail.com"
echo "   Password: admin123"