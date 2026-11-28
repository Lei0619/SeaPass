# SeaPass

**A Smart Passenger Identification and Monitoring System for Maritime Transportation**

SeaPass is a group-developed academic project designed to improve passenger identification, boarding monitoring, and passenger accountability in maritime transportation. The system combines a web-based management platform, RFID technology, camera-based monitoring, and AI-powered facial verification to support a more organized and reliable passenger boarding process.

## Overview

SeaPass aims to provide a centralized platform where authorized personnel can manage passenger information, monitor boarding activities, and review passenger identification records.

The system uses RFID cards to identify registered passengers during boarding and disembarkation. Camera-based monitoring and facial verification are intended to provide an additional layer of identity verification.

When facial verification cannot confidently establish a match, the system is designed to support manual review by authorized personnel rather than relying entirely on automated decisions.

## Key Features

- **Passenger Management** – Register, maintain, and manage passenger information.
- **RFID Identification** – Assign RFID cards to passengers for identification during boarding and disembarkation.
- **Boarding Monitoring** – Record passenger boarding and disembarkation activities.
- **Facial Verification** – Integrate AI-based facial verification to assist in confirming passenger identity.
- **Manual Verification** – Allow authorized personnel to review uncertain or unsuccessful facial verification results.
- **Boat Management** – Manage registered boats and their assigned administrators.
- **Voyage Monitoring** – Maintain records of individual voyages and their passenger activities.
- **Administrative Dashboard** – Provide authorized administrators with an overview of relevant system records and activities.

## System Architecture

SeaPass consists of three primary components:

1. **Web Application** – Handles passenger records, administrative operations, and voyage monitoring.
2. **IoT Integration** – Uses RFID technology and camera hardware to support passenger identification and monitoring.
3. **AI Integration** – Performs facial verification to assist with passenger identity checks.

## Technology Stack

| Component               | Technology                       |
| ----------------------- | -------------------------------- |
| Backend                 | Laravel 13                       |
| Frontend                | React                            |
| Server-side Integration | Inertia.js                       |
| Programming Language    | PHP, TypeScript                  |
| Database                | MySQL                            |
| Styling                 | Tailwind CSS                     |
| Development Environment | Docker / Laravel Sail            |
| Hardware Integration    | RFID and camera-based components |
| AI Integration          | Facial verification              |

_The specific AI model, processing environment, and hardware communication implementation may be updated as development progresses._

## User Roles

| Role                        | Responsibility                                                              |
| --------------------------- | --------------------------------------------------------------------------- |
| Super Administrator         | Oversees the overall system and manages administrative access.              |
| Administrator / Boat Driver | Manages assigned boat operations and monitors passenger-related activities. |

Each boat is assigned to one administrator under the project's current assignment model.

## Project Structure

The application follows a Laravel and React architecture:

- `app/` – Backend application logic, models, and other Laravel components.
- `database/` – Database migrations, factories, and seeders.
- `resources/js/` – React components, pages, and frontend logic.
- `routes/` – Application route definitions.
- `public/` – Publicly accessible application assets.
- `tests/` – Automated application tests.

## Getting Started

### Prerequisites

Make sure the following tools are installed:

- Git
- Docker Desktop
- Docker Compose
- Node.js and npm

### Installation

**1. Clone the repository**

```bash
git clone <repository-url>
cd SeaPass
```

**2. Install PHP dependencies**

```bash
composer install
```

**3. Install JavaScript dependencies**

```bash
npm install
```

**4. Configure the environment**

```bash
cp .env.example .env
```

Configure the database and other required environment variables in `.env`.

**5. Generate the application key**

```bash
php artisan key:generate
```

**6. Start the Docker environment**

```bash
docker compose up -d
```

**7. Run database migrations**

```bash
docker compose exec laravel.test php artisan migrate
```

**8. Start the frontend development server**

```bash
docker compose exec laravel.test npm run dev
```

Access the application through the local URL configured by the Docker environment.

## Development Checks

The project includes automated checks to help maintain code quality and consistency.

Run the complete CI check:

```bash
docker compose exec laravel.test composer ci:check
```

Other available checks include:

```bash
docker compose exec laravel.test npm run check
docker compose exec laravel.test npm run types:check
docker compose exec laravel.test ./vendor/bin/pint --test
```

## Security and Privacy

SeaPass is designed to handle passenger information and biometric-related data. Security and privacy considerations include:

- Restricting access according to user roles.
- Protecting passenger information and identification records.
- Limiting access to facial verification data to authorized personnel.
- Applying appropriate data retention and deletion policies.
- Supporting manual review when automated verification is inconclusive.

Biometric processing and passenger-data handling must follow applicable privacy requirements and institutional policies.

## Project Status

**Development in Progress**

SeaPass is an academic group project. Its features, integrations, and implementation details may evolve throughout the development process.

## Contributors

**Development Team**

- Contributor 1 – To be added
- Contributor 2 – To be added
- Contributor 3 – To be added
- Contributor 4 – To be added

_Contributor names and responsibilities will be updated as the team information is finalized._

## License

This project is developed for academic purposes. Licensing and distribution terms are subject to the project team's and institution's requirements.
