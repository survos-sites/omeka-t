# Omeka T (Symfony 7.4)

This repository hosts the Symfony 7.4 application used to migrate Omeka S from
its legacy Laminas stack. Symfony is the primary app; the legacy codebase is
vendored for fallback routing during the transition.

## Goals

- Use a standard Symfony 7.4 layout (src/, config/, templates/, public/).
- Gradually port legacy functionality into Symfony services/controllers.
- Keep legacy code isolated and only used as a fallback.

## Repository layout

- Symfony app (primary): `src/`, `config/`, `templates/`, `public/`
- Legacy Omeka S (read-only): `legacy/omeka-s/`

## Development

1. Install dependencies:
   - `composer install`
2. Run the Symfony app:
   - `symfony serve`
   - or `php -S 127.0.0.1:8000 -t public`

## Legacy code

The legacy Omeka S code is stored under `legacy/omeka-s/`. Do not run Composer
inside that directory. It is used only for fallback routing and source
reference during migration.

## Migration strategy (short)

1. Symfony routes first.
2. If a route is missing, fall back to legacy.
3. Move services/entities/controllers incrementally into Symfony.

See `MIGRATION.md` for the detailed plan.
