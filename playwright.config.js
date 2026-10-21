import { defineConfig } from '@playwright/test';
import path from 'node:path';

export default defineConfig({
    testDir: './tests/Browser',
    testMatch: '**/*.spec.js',
    fullyParallel: false,
    workers: 1,
    timeout: 120_000,
    expect: { timeout: 20_000 },
    reporter: 'list',
    use: {
        baseURL: 'http://127.0.0.1:8017',
        channel: 'chrome',
        headless: true,
        actionTimeout: 15_000,
        viewport: { width: 1440, height: 1000 },
        screenshot: 'only-on-failure',
        trace: 'retain-on-failure',
    },
    webServer: {
        command: 'php tests/Browser/prepare.php && php artisan serve --host=127.0.0.1 --port=8017 --no-reload',
        url: 'http://127.0.0.1:8017',
        reuseExistingServer: false,
        timeout: 120_000,
        env: {
            APP_ENV: 'local',
            APP_URL: 'http://127.0.0.1:8017',
            DB_CONNECTION: 'sqlite',
            DB_DATABASE: path.resolve('storage/framework/testing/browser.sqlite'),
            DB_URL: '',
            SESSION_DRIVER: 'file',
            SESSION_COOKIE: 'northglass_browser_test',
            CACHE_STORE: 'array',
            MAIL_MAILER: 'array',
        },
    },
});
