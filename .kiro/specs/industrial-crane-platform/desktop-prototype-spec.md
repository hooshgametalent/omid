# Specification نمونهٔ بصری دسکتاپ

- **مرتبط با:** `TASK-007`
- **وضعیت:** آمادهٔ پیاده‌سازی
- **Viewport هدف:** دسکتاپ، طراحی مرجع روی عرض `1440px` با container حداکثر `1280px`
- **زبان/جهت موقت:** فارسی، RTL
- **داده:** کاملاً آزمایشی

## 1. هدف ارائه

کارفرما باید بتواند با ورود به `/demo` همهٔ بخش‌های پیشنهادی سایت، فروشگاه، حساب مشتری و پنل اختصاصی را بدون backend عملیاتی مشاهده کند. تمام لینک‌های اصلی باید به نمای متناظر برسند و هر صفحه نشان «نسخهٔ نمایشی با اطلاعات آزمایشی» داشته باشد.

## 2. جهت بصری اولیه

- شخصیت برند: صنعتی، دقیق، ایمن و قابل اعتماد.
- رنگ پایه: سرمه‌ای تیره برای اعتماد و ساختار.
- رنگ تأکیدی: زرد/کهربایی صنعتی برای CTA و وضعیت مهم.
- پس‌زمینه: خاکستری بسیار روشن و سطوح سفید.
- typography: فونت system فارسی؛ هیچ font خارجی در prototype لازم نیست.
- تصویر: illustrationهای CSS/inline SVG و placeholder داخلی، بدون asset دارای حق نشر.
- چیدمان: فضای سفید کافی، grid منظم، کارت‌های فنی، جدول مشخصات و CTAهای واضح.

## 3. پوستهٔ عمومی

### نوار بالایی

- نشان «نسخه نمایشی»
- تلفن و ساعات پاسخ‌گویی آزمایشی
- لینک ورود و سبد خرید

### Header

- لوگوتایپ آزمایشی «فراز سازه»
- navigation: خانه، جرثقیل‌ها، خدمات، پروژه‌ها، فروشگاه، مجله، تماس
- CTA اصلی: «درخواست مشاوره فنی»

### Footer

- معرفی کوتاه
- لینک‌های سریع و خدمات
- اطلاعات تماس آزمایشی
- اعتماد/استانداردها با برچسب «نمونه»
- حقوقی و توضیح آزمایشی‌بودن اطلاعات

## 4. پوستهٔ پنل

- sidebar ثابت راست با گروه‌های داشبورد، محتوا، فروشگاه، رسانه و سیستم
- topbar شامل عنوان صفحه، جست‌وجوی نمایشی، اعلان و کاربر آزمایشی
- content area با KPI card، table، filter، form و status badge
- هیچ permission واقعی enforce نمی‌شود؛ صفحهٔ denied فقط intent را نشان می‌دهد

## 5. sitemap و route map

### Public

| Page type | Route | هدف اصلی |
|---|---|---|
| راهنمای دمو | `/demo` | دسترسی یک‌جا به همهٔ نماها |
| خانه | `/` | معرفی شرکت، توانمندی و CTA |
| درباره | `/about` | اعتماد، تاریخچه و ظرفیت‌ها |
| خدمات | `/services` | فهرست خدمات |
| جزئیات خدمت | `/services/design-and-build` | توضیح فرایند خدمت |
| جرثقیل‌ها | `/cranes` | فهرست توانمندی‌های ساخت |
| جزئیات جرثقیل | `/cranes/double-girder-overhead` | صفحهٔ محتوایی مستقل و غیرمحصولی |
| پروژه‌ها | `/projects` | نمونه‌کارها |
| جزئیات پروژه | `/projects/steel-complex-crane` | روایت پروژه و نتایج آزمایشی |
| مقاله‌ها | `/articles` | محتوای آموزشی |
| جزئیات مقاله | `/articles/crane-selection-guide` | مقالهٔ نمونه |
| FAQ | `/faq` | پاسخ به پرسش‌ها |
| تماس | `/contact` | راه‌های ارتباطی |
| استعلام | `/quote` | فرم درخواست مشاوره |
| جست‌وجو | `/search` | نتیجهٔ ترکیبی |
| جست‌وجوی خالی | `/search?state=empty` | empty state |
| حریم خصوصی | `/privacy` | placeholder حقوقی |
| شرایط | `/terms` | placeholder حقوقی |
| وضعیت‌ها | `/states/{state}` | `loading/empty/error/denied/maintenance/404/500` |

### Store and customer

| Page type | Route |
|---|---|
| خانه فروشگاه | `/shop` |
| دسته‌بندی | `/shop/category/electrical-parts` |
| محصول | `/shop/products/industrial-remote-control` |
| محصول ناموجود | `/shop/products/limit-switch?state=out-of-stock` |
| محصول بدون قیمت | `/shop/products/brake-pad?state=quote` |
| سبد | `/cart` |
| checkout | `/checkout` |
| نتیجه سفارش | `/checkout/success` |
| ورود | `/login` |
| ثبت‌نام | `/register` |
| بازیابی | `/forgot-password` |
| حساب | `/account` |
| سفارش‌ها | `/account/orders` |
| جزئیات سفارش | `/account/orders/10024` |
| آدرس‌ها | `/account/addresses` |

### Admin

| Page type | Route |
|---|---|
| ورود پنل | `/admin/login` |
| داشبورد | `/admin` |
| جرثقیل‌ها | `/admin/cranes` |
| فرم جرثقیل | `/admin/cranes/create` |
| محصولات | `/admin/products` |
| فرم محصول | `/admin/products/create` |
| سفارش‌ها | `/admin/orders` |
| جزئیات سفارش | `/admin/orders/10024` |
| پروژه‌ها | `/admin/projects` |
| مقاله‌ها | `/admin/articles` |
| صفحات | `/admin/pages` |
| رسانه | `/admin/media` |
| import | `/admin/imports` |
| تنظیمات SEO | `/admin/seo` |
| redirectها | `/admin/redirects` |
| درخواست‌ها | `/admin/leads` |
| کاربران | `/admin/users` |
| نقش‌ها | `/admin/roles` |
| تنظیمات | `/admin/settings` |
| audit log | `/admin/audit-log` |

## 6. تمایز templateها

### CraneCapability

- label: «توانمندی ساخت»
- headline فنی، خلاصهٔ کاربرد، مشخصات قابل سفارش، صنایع هدف، فرایند طراحی/ساخت، گالری نمایشی، FAQ، پروژه و قطعه مرتبط، CTA استعلام
- بدون SKU، قیمت، موجودی و Add to cart
- SEO intent: محتوای تخصصی/خدمت؛ schema نهایی deferred

### Product

- label: «محصول فروشگاه»
- SKU، قیمت یا «تماس بگیرید»، موجودی، ویژگی، گالری، تعداد و Add to cart
- SEO intent: محصول واقعی؛ `Product` structured-data intent فقط در فاز عملیاتی

## 7. component inventory

- `DemoNotice`
- `Topbar`, `PublicHeader`, `PublicFooter`
- `AdminSidebar`, `AdminTopbar`
- `Breadcrumb`
- `HeroIndustrial`
- `SectionHeading`
- `MetricCard`, `FeatureCard`, `CraneCard`, `ProductCard`, `ProjectCard`, `ArticleCard`
- `TechnicalSpecs`
- `StatusBadge`
- `DataTableMock`
- `FormField`, `SelectMock`, `FileDropMock`
- `PaginationMock`
- `CallToAction`
- `PlaceholderVisual`
- `StatePanel`
- `SeoPreviewMock`

## 8. stateها

- loading: skeleton ثابت و aria label متنی
- empty: علت، راه بعدی و CTA
- error: پیام عمومی بدون جزئیات فنی و retry نمایشی
- denied: توضیح نبود دسترسی و بازگشت به داشبورد
- success: خلاصهٔ اقدام آزمایشی و مسیر بعدی
- out-of-stock و quote-only برای محصول
- draft/published/archived برای محتوای پنل

## 9. محتوای نمایشی

- نام موقت شرکت: «فراز سازه کویر»
- جرثقیل‌های نمونه: سقفی دوپل، سقفی تک‌پل، دروازه‌ای، بازویی و مونوریل
- خدمات نمونه: طراحی و ساخت، نصب و راه‌اندازی، تعمیر و نگهداری، بازرسی و نوسازی
- محصولات نمونه: ریموت صنعتی، لیمیت‌سوئیچ، سیم‌بکسل، لنت ترمز، کلید فرمان و چرخ جرثقیل
- همهٔ ظرفیت‌ها، قیمت‌ها، استانداردها، مشتریان و نتایج پروژه با برچسب آزمایشی نمایش داده شوند.

## 10. SEO نمایشی در prototype

- title و meta description اختصاصی برای هر page type
- canonical به URL فعلی mock
- breadcrumb قابل مشاهده
- label داخلی `index/noindex intent` در راهنمای دمو
- صفحات account/admin/cart/checkout/search با intent `noindex`
- هیچ validation یا claim رتبه‌گیری در این مرحله وجود ندارد

## 11. معیار پایان TASK-007

- تمام page typeها route مشخص دارند.
- public، shop، account و admin از هم تفکیک شده‌اند.
- صفحهٔ جرثقیل از محصول فروشگاه متمایز است.
- layout و component inventory برای پیاده‌سازی بدون تصمیم مهم جدید کافی است.
- تصمیم‌های واقعی برند/فروشگاه مانع prototype نیستند و با mock آشکار جایگزین شده‌اند.
