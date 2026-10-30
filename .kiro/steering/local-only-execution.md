# قانون اجرای محلی فرمان‌ها

این قانون در تمام فازهای پروژه و برای همهٔ agentها لازم‌الاجرا است.

## محدودهٔ اجرا

- همهٔ فرمان‌های نصب، ساخت، توسعه، تست، lint، format، migration، seed، queue، asset build و ابزارهای بررسی فقط روی سیستم محلی کاربر اجرا می‌شوند.
- working directory پیش‌فرض پروژه `h:\yazd bar` است، مگر اینکه کاربر مسیر محلی دیگری را صریحاً تعیین کند.
- هیچ فرمانی روی GitHub Actions، runnerهای CI/CD، Codespaces، سرور staging/production، SSH host، remote container یا cloud shell اجرا نمی‌شود، مگر با درخواست و تأیید صریح کاربر برای همان target.
- اگر انجام کاری فقط در محیط راه‌دور ممکن باشد، agent باید متوقف شود و دلیل و گزینه‌های محلی را به کاربر ارائه کند.

## نصب dependency

- فرمان‌هایی مانند `composer`، `php artisan`، `npm` و ابزارهای مشابه باید از shell محلی و در مسیر محلی تأییدشده اجرا شوند.
- دانلود package از registry توسط یک فرمان محلی، اجرای راه‌دور محسوب نمی‌شود؛ با این حال نام package، نسخه/constraint و دلیل نیاز باید پیش از نصب از شواهد پروژه تعیین شود.
- package، نسخه یا command حدس زده نمی‌شود. ابتدا نسخه‌های PHP، Composer، Node، Laravel و Livewire و فایل‌های manifest/lock بررسی می‌شوند.
- `vendor/`، `node_modules/`، `.env`، secretها، cacheها و artifactهای محلی نباید وارد Git شوند.

## Git و انتشار

- قرارگرفتن فایل در working tree محلی به معنی commit یا ارسال آن به GitHub نیست.
- هیچ `git commit`، `git push`، تغییر remote، ساخت pull request، release یا deploy بدون درخواست و تأیید صریح کاربر انجام نمی‌شود.
- هیچ workflow برای نصب/build/test در GitHub Actions یا CI ساخته یا اجرا نمی‌شود، مگر اینکه کاربر بعداً صریحاً آن را در scope قرار دهد.
- Git فقط برای بررسی محلی مانند `status` و `diff` استفاده می‌شود، مگر کاربر عملیات دیگری را مجاز کند.

## داده و عملیات اثرگذار

- migration و seed فقط روی پایگاه دادهٔ محلیِ شناسایی‌شده اجرا می‌شوند. در نبود evidence محلی‌بودن database، فرمان اجرا نمی‌شود.
- حذف داده، migration مخرب، تغییر permission، پاک‌سازی queue/cache با اثر ناشناخته و هر عملیات سخت‌برگشت نیازمند تأیید صریح است.
- خروجی command، exit code و محیط اجرا باید ثبت شود؛ command اجرا‌نشده هرگز `pass` اعلام نمی‌شود.

## ابهام دربارهٔ محل نصب

تا وقتی کاربر مشخص نکرده باشد Laravel باید داخل working tree محلی این repository ساخته شود یا در یک پوشهٔ محلی خارج از Git، نصب متوقف می‌ماند. هیچ‌یک از این دو حالت مجوز commit یا push خودکار نیست.