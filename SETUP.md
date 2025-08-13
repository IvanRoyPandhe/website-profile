# Nursing Study Program Website

A Laravel-based website for a Nursing Study Program with Filament admin panel for content management.

## Features

- **Public Website**: Home, About, Academic Staff, Curriculum, and Contact pages
- **Admin Panel**: Filament-based CMS for managing all content
- **Responsive Design**: Mobile-friendly with TailwindCSS
- **Database-Driven**: All content stored in MySQL database
- **Contact Form**: Functional contact form with admin notifications
- **File Uploads**: Support for staff photos and hero images

## Requirements

- PHP 8.2+
- Composer
- Node.js & NPM
- Docker & Docker Compose (for database)

## Installation & Setup

### 1. Clone and Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 2. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 3. Database Setup

```bash
# Start MySQL and phpMyAdmin with Docker
docker compose up -d

# Wait for MySQL to be ready (about 30 seconds), then run migrations
php artisan migrate

# Seed the database with sample data
php artisan db:seed
```

### 4. Storage Setup

```bash
# Create storage link for file uploads
php artisan storage:link
```

### 5. Admin User

An admin user has already been created with the following credentials:
- **Email**: admin@nursing.edu
- **Password**: admin123

### 6. Start the Application

```bash
# Start Laravel development server
php artisan serve

# In another terminal, start Vite for asset compilation
npm run dev
```

## Access Points

- **Public Website**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin
- **phpMyAdmin**: http://localhost:8080

## Database Configuration

The application uses MySQL running in Docker:
- **Host**: localhost
- **Port**: 3307
- **Database**: nursing_website
- **Username**: laravel_user
- **Password**: laravel_password

## Admin Panel Features

### Content Management
- **Pages**: Manage Home, About, and Contact page content
- **Academic Staff**: Add/edit faculty members with photos and qualifications
- **Curriculum**: Manage course listings by semester
- **Contact Submissions**: View and manage contact form submissions

### Navigation Groups
- **Content Management**: Pages, Staff, Curriculum
- **Communications**: Contact Submissions

## File Structure

```
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/Controllers/       # Web controllers
│   └── Models/                 # Eloquent models
├── database/
│   ├── migrations/             # Database migrations
│   └── seeders/                # Sample data seeders
├── resources/views/
│   ├── layouts/                # Blade layouts
│   └── public/                 # Public page views
├── docker-compose.yml          # Docker configuration
└── routes/web.php              # Web routes
```

## Customization

### Adding New Pages
1. Create migration for page content
2. Add seeder data
3. Create route in `routes/web.php`
4. Add controller method
5. Create Blade view

### Styling
- Uses TailwindCSS with custom nursing theme colors
- Main colors: `nursing-blue` (#1e40af) and `nursing-light-blue` (#3b82f6)
- Responsive design with mobile-first approach

### Database Schema

#### Pages Table
- `slug`: Unique page identifier
- `title`: Page title
- `content`: HTML content
- `hero_image`: Hero section image
- `hero_title`: Hero section title
- `hero_subtitle`: Hero section subtitle

#### Staff Table
- `name`: Faculty member name
- `position`: Job title
- `bio`: Biography
- `photo`: Profile photo
- `qualifications`: Array of qualifications

#### Curriculum Items Table
- `semester`: Course semester
- `course_code`: Course code (e.g., NURS 101)
- `course_name`: Course name
- `description`: Course description
- `credits`: Credit hours

#### Contact Submissions Table
- `name`: Submitter name
- `email`: Contact email
- `subject`: Message subject
- `message`: Message content
- `is_read`: Read status

## Production Deployment

1. Set `APP_ENV=production` in `.env`
2. Configure proper database credentials
3. Set up proper file storage (S3, etc.)
4. Configure mail settings for contact form
5. Set up SSL certificate
6. Configure web server (Nginx/Apache)

## Support

For questions or issues, please contact the development team or refer to the Laravel and Filament documentation.