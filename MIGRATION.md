# Migration Plan

This plan tracks the incremental migration from Omeka S (Laminas) to Symfony.

## Phase 0: Baseline

- Keep the legacy code isolated under `legacy/omeka-s/`.
- Symfony routes are primary; legacy is fallback.
- Verify the profiler, Twig, and console commands work.

## Phase 1: Infrastructure services

- Logging: Symfony Monolog as the canonical logger.
- Mailer: Symfony Mailer and a small adapter for legacy calls.
- Cache: Symfony cache pools; legacy continues unchanged.

## Phase 2: Configuration

- Inventory legacy config arrays.
- Map to Symfony config + .env.
- Keep legacy config intact until fully migrated.

## Phase 3: Routing + controllers

- Migrate low-risk routes first.
- Ensure fallback only triggers on missing Symfony routes.
- Maintain a route parity checklist.

## Phase 4: Entities + data layer

- Mirror key entities in Symfony.
- Add repository services for new features.
- Revisit Doctrine DBAL upgrade once legacy reliance drops.

## Phase 5: Forms + validation

- Replace Laminas forms/validators with Symfony equivalents.
- Build adapters only where needed.

## Phase 6: Jobs + async

- Introduce Symfony Messenger after DBAL upgrade.
- Migrate background tasks incrementally.
