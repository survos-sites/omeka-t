# Agent Notes

This file documents working conventions for humans and automation.

## Directories

- Primary Symfony app: `src/`, `config/`, `templates/`, `public/`
- Legacy Omeka S: `legacy/omeka-s/` (read-only unless explicitly requested)

## Rules of engagement

1. Use Symfony 7.4 conventions and directory layout.
2. Do not edit legacy files unless the task explicitly requires it.
3. Avoid Composer operations inside `legacy/omeka-s/`.
4. Prefer Symfony services, controllers, and configuration for new work.
5. Keep migration changes small and reversible.

## Compatibility constraints

- We target Symfony 7.4 LTS for now.
- Legacy Omeka still depends on older Laminas packages.
- Avoid upgrading Doctrine DBAL in this repo until the migration plan calls for it.

## Fallback routing

The intention is to route requests to Symfony first and fall back to legacy
when no Symfony route matches. The fallback should be explicit and narrow to
avoid blocking Symfony errors.
