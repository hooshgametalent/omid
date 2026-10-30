<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1180, initial-scale=1">
    <title>@yield('title', 'فراز سازه کویر | طراحی و ساخت جرثقیل صنعتی')</title>
    <meta name="description" content="@yield('description', 'نمونهٔ نمایشی وب‌سایت طراحی و ساخت جرثقیل صنعتی')">
    <meta name="robots" content="@yield('robots', 'index,follow')">
    <link rel="canonical" href="{{ url()->current() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body>
    <div class="demo-ribbon">نسخهٔ نمایشی دسکتاپ — همهٔ نام‌ها، مشخصات، قیمت‌ها و تصاویر آزمایشی هستند</div>

    <div class="top-strip">
        <div class="site-container top-strip__inner">
            <div class="cluster">
                <span>شنبه تا پنجشنبه، ۸ تا ۱۷</span>
                <span>۰۳۵-۳۷۲۰ ۰۰۰۰</span>
                <span>یزد، شهرک صنعتی — نشانی آزمایشی</span>
            </div>
            <div class="cluster">
                <a href="{{ url('/login') }}">ورود مشتری</a>
                <span>•</span>
                <a href="{{ url('/cart') }}">سبد خرید (۲)</a>
            </div>
        </div>
    </div>

    <header class="site-header">
        <div class="site-container site-header__inner">
            <a class="brand" href="{{ url('/') }}" aria-label="خانه فراز سازه کویر">
                <span class="brand__mark">ف</span>
                <span>
                    <span class="brand__name">فراز سازه کویر</span>
                    <span class="brand__tagline">طراحی و ساخت تجهیزات جابه‌جایی صنعتی</span>
                </span>
            </a>

            <nav class="main-nav" aria-label="ناوبری اصلی">
                <a href="{{ url('/') }}">خانه</a>
                <a href="{{ url('/cranes') }}">جرثقیل‌ها</a>
                <a href="{{ url('/services') }}">خدمات</a>
                <a href="{{ url('/projects') }}">پروژه‌ها</a>
                <a href="{{ url('/shop') }}">فروشگاه</a>
                <a href="{{ url('/articles') }}">مجله فنی</a>
                <a href="{{ url('/contact') }}">تماس</a>
            </nav>

            <a class="button button--primary" href="{{ url('/quote') }}">درخواست مشاوره فنی</a>
        </div>
    </header>

    <main class="page-main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="site-container">
            <div class="site-footer__grid">
                <div>
                    <a class="brand" href="{{ url('/') }}">
                        <span class="brand__mark">ف</span>
                        <span><span class="brand__name">فراز سازه کویر</span><span class="brand__tagline">برند و اطلاعات آزمایشی</span></span>
                    </a>
                    <p style="margin-top:18px">نمونهٔ پیشنهادی برای معرفی توان طراحی، ساخت و پشتیبانی جرثقیل‌های صنعتی.</p>
                </div>
                <div>
                    <h3>راهکارها</h3>
                    <a href="{{ url('/cranes') }}">جرثقیل‌های قابل ساخت</a>
                    <a href="{{ url('/services') }}">خدمات مهندسی</a>
                    <a href="{{ url('/projects') }}">پروژه‌ها</a>
                    <a href="{{ url('/quote') }}">درخواست استعلام</a>
                </div>
                <div>
                    <h3>فروشگاه</h3>
                    <a href="{{ url('/shop') }}">همه محصولات</a>
                    <a href="{{ url('/shop/category/electrical-parts') }}">قطعات برقی</a>
                    <a href="{{ url('/cart') }}">سبد خرید</a>
                    <a href="{{ url('/account/orders') }}">پیگیری سفارش</a>
                </div>
                <div>
                    <h3>اطلاعات</h3>
                    <a href="{{ url('/about') }}">درباره ما</a>
                    <a href="{{ url('/faq') }}">سؤالات متداول</a>
                    <a href="{{ url('/privacy') }}">حریم خصوصی</a>
                    <a href="{{ url('/demo') }}">فهرست نماهای دمو</a>
                </div>
            </div>
            <div class="site-footer__bottom">© نمونهٔ آزمایشی — هیچ‌یک از ادعاها، گواهی‌ها، قیمت‌ها و اطلاعات تماس برای انتشار نهایی تأیید نشده‌اند.</div>
        </div>
    </footer>
</body>
</html>
