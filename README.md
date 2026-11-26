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

| Component | Technology |
|---|---|
| Backend | Laravel 13 |
| Frontend | React |
| Server-side Integration | Inertia.js |
| Programming Language | PHP, TypeScript |
| Database | MySQL |
| Styling | Tailwind CSS |
| Development Environment | Docker / Laravel Sail |
| Hardware Integration | RFID and camera-based components |
| AI Integration | Facial verification |

*The specific AI model, processing environment, and hardware communication implementation may be updated as development progresses.*

## User Roles

| Role | Responsibility |
|---|---|
| Super Administrator | Oversees the overall system and manages administrative access. |
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
