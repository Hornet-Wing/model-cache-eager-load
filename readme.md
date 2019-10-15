### Usage

1. `cp .env.example .env` and alter settings to suit.
2. `php artisan key:generate`
3. `php artisan server`
4. Load `http://localhost:8000/` and check Debugbar to see 2 queries.
5. Refresh the page. Debugbar now shows 0 queries (because they are cached).
