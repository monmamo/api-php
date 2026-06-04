# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

This is the official Web site and application for Monsters Masters & Mobsters. It features a custom multi-application architecture with a dual namespace structure (`App\` and `Canon\`) for separating application code from game content/rules.

## Development Commands

### Laravel Application
```bash
# Start development server (using Herd - Laravel development environment)
php artisan serve

# Run database migrations
php artisan migrate

# Refresh database with seeders
php artisan migrate:fresh --seed

# Clear application cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Generate application key
php artisan key:generate

# List available artisan commands
php artisan list

# Run tinker (REPL)
php artisan tinker
```

### Frontend Assets
```bash
# Development build with watch
npm run dev

# Production build
npm run build

# Install dependencies
npm install
```

### Code Quality
```bash
# Run Laravel Pint (code formatter)
./vendor/bin/pint

# Run PHPUnit tests
./vendor/bin/phpunit

# Run specific test
./vendor/bin/phpunit --filter TestName

# Generate test coverage
./vendor/bin/phpunit --coverage-html coverage
```

### Composer
```bash
# Install dependencies
composer install

# Update dependencies
composer update

# Dump autoload files
composer dump-autoload

# Run composer scripts
composer run post-autoload-dump
```

## Architecture Overview

### Custom Application Structure
- **BaseApplication**: Abstract base class extending Laravel's Application with custom IoC container bindings
- **HttpApplication**: Extends BaseApplication for web requests with middleware configuration
- **CLI Application**: Custom artisan implementation in the main artisan file

### Dual Namespace Architecture
- **`App\` namespace**: Standard Laravel application code (Controllers, Models, Services, etc.)
- **`Canon\` namespace**: Game-specific content and rules (Monsters, Skills, Traits, Items)

Key directories:
- `app/`: Laravel application code with extensive use of Concerns, Facades, and custom Enums
- `canon/`: Game content including Monsters, Skills, Traits, Items, Taxons, and concepts
- `config/games/`: Game configuration files (e.g., `rcs.php` for card deck configurations)

### Notable Architecture Patterns
- **Facade Pattern**: Extensive use of custom facades (see `app/Facades/`)
- **Enum-Heavy Design**: Custom enums for type safety (see `app/Enums/`)
- **Trait/Concern Architecture**: Heavy use of traits for code reusability (see `app/Concerns/`, `canon/Traits/`)
- **Host Abstraction**: Custom host binding system for different environments

### Auto-loading Helpers
- `app/helpers.php`: Automatically loads all `functions.php` files from subdirectories
- `canon/helpers.php`: Contains game-specific utility functions like `rarity()`, `sizeDelta()`, `taxons()`

## Key Files and Directories

### Core Application
- `artisan`: Custom artisan implementation with BaseApplication integration
- `app/Applications/`: Custom application classes (BaseApplication, HttpApplication)
- `app/Http/Kernel.php`: HTTP kernel with custom middleware configuration

### Game Content
- `canon/`: Contains all game-specific content organized by type
- `canon/Monsters/`: Monster definitions
- `canon/Skills/`: Skill definitions  
- `canon/Traits/`: Trait definitions
- `canon/Items/`: Item definitions
- `canon/Taxons/`: Taxonomic classifications
- `config/games/rcs.php`: Game configuration with card deck structures

### Frontend
- `resources/js/app.js`: Main JavaScript entry point
- `vite.config.js`: Vite configuration with Bootstrap integration
- `package.json`: Frontend dependencies (Bootstrap, Vite, Sass)

## Development Guidelines

### Code Organization
- Place application logic in `app/` namespace following Laravel conventions
- Place game content and rules in `canon/` namespace
- Use custom Enums for type safety instead of magic constants
- Leverage Facades for clean dependency injection
- Use Concerns/Traits for shared functionality across multiple classes

### Testing
- Tests should be placed in `tests/` directory (currently no tests exist)
- Use PHPUnit for backend testing
- Test configuration is in `phpunit.xml`

### Database
- Uses Laravel migrations in `database/migrations/`
- Seeders in `database/seeders/`
- Factory definitions in `database/factories/`

### Environment Configuration
- Uses standard Laravel `.env` file
- Multiple application types supported through custom BaseApplication
- Host-specific configuration through custom Host facade

## Package Dependencies

### Key Laravel Packages
- **Laravel Jetstream**: Authentication scaffolding with Livewire
- **Laravel Sanctum**: API authentication
- **Laravel Folio**: Page-based routing
- **Livewire**: Frontend reactivity
- **Spatie Route Attributes/Discovery**: Enhanced routing capabilities

### Development Tools
- **Laravel Pint**: Code formatting
- **Laravel Telescope**: Debugging and profiling (available but not auto-discovered)
- **Barryvdh DomPDF**: PDF generation capabilities

### Frontend Stack
- **Vite**: Build tool with Laravel plugin
- **Bootstrap 5**: CSS framework
- **Sass**: CSS preprocessing
- **Puppeteer**: Headless browser automation (likely for PDF/image generation)

## Notes for AI Agents

- This project uses a unique dual-namespace architecture - be aware of when to use `App\` vs `Canon\` namespaces
- The custom application classes (BaseApplication, HttpApplication) override standard Laravel bootstrapping
- Game content is heavily data-driven with extensive use of configuration files
- Code style follows Laravel conventions with heavy use of modern PHP features (enums, attributes, etc.)
- The project appears to be a trading card game with complex rule systems and card mechanics