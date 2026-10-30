# Master Backlog — نمونهٔ بصری پلتفرم جرثقیل صنعتی

- **شناسه پروژه:** `industrial-crane-platform`
- **نسخه backlog:** `0.1`
- **محدوده اجرایی این دور:** نمونهٔ ساده و فقط دسکتاپ با دادهٔ آزمایشی
- **مرجع نیازمندی:** [requirements.md](./requirements.md)
- **قاعده اجرا:** ترتیب عددی، مگر اینکه dependency یا blocker ثبت‌شده تغییر کند

## راهنمای وضعیت

- `DONE`: انجام و دارای evidence
- `IN_PROGRESS`: در حال اجرا
- `TODO`: آمادهٔ اجرا
- `DEFERRED`: خارج از prototype و برای فاز عملیاتی آینده
- `BLOCKED`: منتظر تصمیم یا ورودی ضروری

## Milestone M0 — آماده‌سازی پروژه

| ترتیب | ID | وضعیت | مالک | وابستگی | خروجی و معیار پذیرش |
|---:|---|---|---|---|---|
| 1 | `TASK-001` | `DONE` | `laravel-backend-engineer` | — | PHP، Composer، Node و npm محلی شناسایی شدند. |
| 2 | `TASK-002` | `DONE` | `laravel-backend-engineer` | `TASK-001` | Laravel در working tree محلی نصب شد؛ بدون commit/push. |
| 3 | `TASK-003` | `DONE` | `laravel-backend-engineer` | `TASK-002` | dependencyهای Composer/npm و Livewire نصب شدند. |
| 4 | `TASK-004` | `DONE` | `laravel-backend-engineer` | `TASK-003` | `.env` محلی و `APP_KEY` ایجاد و ignoreها تأیید شدند. |
| 5 | `TASK-005` | `DONE` | `laravel-backend-engineer` | `TASK-004` | Composer معتبر، دو تست پایه پاس و Vite build موفق شد. |
| 6 | `TASK-006` | `DONE` | `product-requirements-analyst` | `TASK-005` | `requirements.md` و همین backlog شامل scope، صفحات، ترتیب، dependency و AC ذخیره و کنترل شدند. |

## Milestone M1 — prototype دسکتاپ قابل ارائه

> این milestone فقط نمای ظاهری است. همهٔ اطلاعات، قیمت‌ها، پروژه‌ها، مشخصات فنی، کاربران و سفارش‌ها آزمایشی‌اند و نباید دادهٔ واقعی تلقی شوند.

| ترتیب | ID | وضعیت | مالک | وابستگی | خروجی و معیار پذیرش |
|---:|---|---|---|---|---|
| 7 | `TASK-007` | `DONE` | `ux-ui-designer` | `TASK-006` | sitemap، route map و specification دسکتاپ در `desktop-prototype-spec.md` ثبت شد؛ `CraneCapability` از `Product` جدا است. |
| 8 | `TASK-008` | `DONE` | `livewire-frontend-engineer` | `TASK-007` | پوستهٔ RTL دسکتاپ، design tokens، layout عمومی/پنل و componentهای پایه در `resources/views` و `resources/css/app.css` پیاده شد. |
| 9 | `TASK-009` | `DONE` | `content-copy-strategist` | `TASK-007` | دادهٔ آزمایشی متمرکز شرکت، خدمات، جرثقیل‌ها، پروژه‌ها، مقاله‌ها، محصولات، سفارش‌ها و کاربران در `config/demo.php` ایجاد شد. |
| 10 | `TASK-010` | `IN_PROGRESS` | `livewire-frontend-engineer` | `TASK-008`, `TASK-009` | صفحات شرکتی خانه، درباره ما، خدمات، FAQ، تماس و درخواست مشاوره در حال ساخت هستند. |
| 11 | `TASK-011` | `TODO` | `livewire-frontend-engineer` | `TASK-008`, `TASK-009` | فهرست توانمندی‌های جرثقیل و صفحهٔ اختصاصی محتوایی جرثقیل با مشخصات، کاربرد، فرایند، گالری mock، FAQ و CTA ساخته شوند؛ template از محصول جدا باشد. |
| 12 | `TASK-012` | `TODO` | `livewire-frontend-engineer` | `TASK-008`, `TASK-009` | فهرست پروژه‌ها/جزئیات، فهرست مقاله‌ها/جزئیات و جست‌وجوی عمومی با حالت نتیجه و بدون نتیجه ساخته شوند. |
| 13 | `TASK-013` | `TODO` | `livewire-frontend-engineer` | `TASK-008`, `TASK-009` | فروشگاه، دسته‌بندی/فهرست محصول، فیلتر نمایشی و صفحهٔ محصول با حالت‌های قیمت، تماس بگیرید، موجود/ناموجود و محصول بدون تصویر ساخته شوند. |
| 14 | `TASK-014` | `TODO` | `livewire-frontend-engineer` | `TASK-013` | سبد خرید، checkout، نتیجه سفارش، ورود، ثبت‌نام، بازیابی، حساب، سفارش‌ها و آدرس‌ها فقط به‌صورت mock ساخته شوند. |
| 15 | `TASK-015` | `TODO` | `livewire-frontend-engineer` | `TASK-008`, `TASK-009` | صفحات حقوقی placeholder، `404`، `500`، maintenance و stateهای loading/empty/error/permission-denied ساخته شوند. |
| 16 | `TASK-016` | `TODO` | `admin-iam-rbac-engineer` | `TASK-008`, `TASK-009` | نمای سادهٔ پنل: login، dashboard، جرثقیل‌ها، محصولات، سفارش‌ها، محتوا، رسانه/import، SEO، leadها، کاربران/نقش‌ها، تنظیمات و audit ساخته شود؛ کنترل دسترسی فقط نمایشی است. |
| 17 | `TASK-017` | `TODO` | `technical-seo-specialist` | `TASK-010` تا `TASK-015` | SEO نمایشی page typeها: title/meta، canonical intent، breadcrumb، robots/indexability label، structured-data intent و پیوند داخلی در markup/spec مشخص شود؛ validation production ادعا نشود. |
| 18 | `TASK-018` | `TODO` | `livewire-frontend-engineer` | `TASK-010` تا `TASK-017` | همهٔ routeها در یک صفحهٔ «راهنمای دمو» فهرست شوند؛ navigation بدون بن‌بست و نشان «نسخه آزمایشی» در تمام prototype قابل مشاهده باشد. |
| 19 | `TASK-019` | `TODO` | `livewire-frontend-engineer` | `TASK-018` | self-check محلی بدون ایجنت QA: render routeهای دمو، نبود خطای server، صحت لینک‌های اصلی و `npm run build` ثبت شود. |
| 20 | `TASK-020` | `TODO` | `laravel-livewire-orchestrator` | `TASK-019` | فهرست URLهای ارائه، محدودیت‌های prototype و موارد نیازمند بازخورد کارفرما ثبت و milestone M1 بسته شود. |

## فهرست route/page type مورد انتظار در M1

### عمومی

- `/demo` — راهنمای تمام نماها
- `/` — خانه
- `/about` — دربارهٔ شرکت
- `/services` و `/services/{slug}` — خدمات
- `/cranes` و `/cranes/{slug}` — توانمندی‌های ساخت جرثقیل
- `/projects` و `/projects/{slug}` — پروژه‌ها
- `/articles` و `/articles/{slug}` — مقاله‌ها
- `/faq` — پرسش‌های متداول
- `/contact` — تماس
- `/quote` — درخواست مشاوره/استعلام
- `/search` — جست‌وجو با حالت دارای نتیجه و بدون نتیجه
- `/privacy` و `/terms` — صفحات حقوقی placeholder
- صفحه‌های نمایشی `404`، `500` و maintenance

### فروشگاه و حساب

- `/shop`
- `/shop/category/{slug}`
- `/shop/products/{slug}`
- `/cart`
- `/checkout`
- `/checkout/success`
- `/login`، `/register` و `/forgot-password`
- `/account`
- `/account/orders` و `/account/orders/{id}`
- `/account/addresses`

### پنل اختصاصی

- `/admin/login`
- `/admin`
- `/admin/cranes` و فرم نمایشی آن
- `/admin/products` و فرم نمایشی آن
- `/admin/orders` و جزئیات نمایشی
- `/admin/projects`
- `/admin/articles`
- `/admin/pages`
- `/admin/media`
- `/admin/imports`
- `/admin/seo`
- `/admin/redirects`
- `/admin/leads`
- `/admin/users`
- `/admin/roles`
- `/admin/settings`
- `/admin/audit-log`

## Milestone M2 — تصمیم و طراحی فاز عملیاتی آینده

این موارد اکنون اجرا نمی‌شوند، اما از backlog حذف نشده‌اند.

| ترتیب | ID | وضعیت | مالک | وابستگی | خروجی مورد انتظار آینده |
|---:|---|---|---|---|---|
| 21 | `TASK-021` | `DEFERRED` | `product-requirements-analyst` | `TASK-020` | دریافت تأیید کارفرما، برند، انواع واقعی جرثقیل و مدل نهایی فروشگاه. |
| 22 | `TASK-022` | `DEFERRED` | `solution-architect` | `TASK-021` | معماری content، shop، admin، media، search و integrationها. |
| 23 | `TASK-023` | `DEFERRED` | `data-modeler` | `TASK-022` | مدل داده، lifecycle، slug، SEO metadata، media variant و migration/rollback plan. |
| 24 | `TASK-024` | `DEFERRED` | `admin-iam-rbac-engineer` | `TASK-021`, `TASK-022` | permission catalog، role matrix، Policies/Gates و audit design. |
| 25 | `TASK-025` | `DEFERRED` | `solution-architect` | `TASK-021`, `TASK-022` | انتخاب مستند packageهای فروشگاه/SEO/media فقط در صورت نیاز و سازگاری. |
| 26 | `TASK-026` | `DEFERRED` | `laravel-backend-engineer` | `TASK-023` تا `TASK-025` | backend صفحات، content workflow، فرم‌ها و جست‌وجو. |
| 27 | `TASK-027` | `DEFERRED` | `laravel-backend-engineer` | `TASK-023`, `TASK-025` | فروشگاه عملیاتی مطابق تصمیم خرید آنلاین یا استعلام. |
| 28 | `TASK-028` | `DEFERRED` | `laravel-backend-engineer` | `TASK-023`, `TASK-025` | pipeline واقعی upload/import، WebP و variantها با validation/retry. |
| 29 | `TASK-029` | `DEFERRED` | `admin-iam-rbac-engineer` | `TASK-024`, `TASK-026` تا `TASK-028` | پنل عملیاتی و enforcement سمت سرور. |
| 30 | `TASK-030` | `DEFERRED` | `technical-seo-specialist` | `TASK-026` تا `TASK-029` | SEO عملیاتی، sitemap، robots، canonical، schema و redirectها. |
| 31 | `TASK-031` | `DEFERRED` | `application-security-auditor` | `TASK-026` تا `TASK-030` | gate امنیتی مستقل، فقط در فاز عملیاتی آینده. |
| 32 | `TASK-032` | `DEFERRED` | `qa-test-engineer` | `TASK-026` تا `TASK-030` | suite کامل unit/feature/Livewire/authorization/media/SEO، فقط در فاز آینده. |
| 33 | `TASK-033` | `DEFERRED` | `web-performance-accessibility-auditor` | `TASK-030`, `TASK-032` | gate performance/accessibility با measurement واقعی. |
| 34 | `TASK-034` | `DEFERRED` | `growth-analytics-strategist` | `TASK-021` | KPI، event taxonomy، consent و measurement plan. |
| 35 | `TASK-035` | `DEFERRED` | `devops-release-engineer` | `TASK-031` تا `TASK-034` | release readiness، backup/rollback و انتشار فقط با تأیید مستقل کاربر. |

## سیاست تصاویر برای prototype

- هیچ import واقعی در M1 انجام نمی‌شود.
- برای mock از illustration داخلی، gradient، icon یا placeholder استفاده می‌شود و تصویر واقعی/دارای حق نشر از وب کپی نمی‌شود.
- محل نمایش تصویر با aspect ratio و intent مشخص می‌شود تا preset نهایی در `TASK-028` پیاده شود.
- presetهای `320/480/768/1024/1280/1600/1920` فعلاً کاندیدا هستند و تصمیم نهایی محسوب نمی‌شوند.

## تصمیم‌های مؤثر اما غیرمسدودکننده برای M1

- نام و هویت واقعی شرکت
- فهرست واقعی جرثقیل‌ها
- مدل خرید آنلاین یا استعلام
- قیمت و موجودی واقعی
- نقش‌های واقعی پنل
- مشخصات دقیق image preset
- hosting و analytics

تا دریافت پاسخ، prototype از نام‌ها، اعداد و محتوای ساختگی و آشکارا آزمایشی استفاده می‌کند.

## تغییر ترتیب و مدیریت backlog

کاربر اجازه داده taskها در ادامه اضافه، ویرایش یا جابه‌جا شوند. هر تغییر باید IDهای موجود را پایدار نگه دارد؛ task حذف‌شده به‌جای استفادهٔ مجدد از ID با وضعیت `DEFERRED/CANCELLED` ثبت می‌شود.