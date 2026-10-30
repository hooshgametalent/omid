<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1180, initial-scale=1">
    <title>@yield('title', 'پنل مدیریت نمایشی')</title>
    <meta name="robots" content="noindex,nofollow">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="admin-shell">
    <aside class="admin-sidebar">
        <a class="brand" href="{{ url('/admin') }}">
            <span class="brand__mark">ف</span>
            <span><span class="brand__name">پنل فراز سازه</span><span class="brand__tagline">نسخهٔ نمایشی</span></span>
        </a>

        <div class="admin-sidebar__section">نمای کلی</div>
        <a class="admin-sidebar__link {{ request()->is('admin') ? 'is-active' : '' }}" href="{{ url('/admin') }}">◈ داشبورد</a>
        <a class="admin-sidebar__link" href="{{ url('/demo') }}">↗ مشاهده راهنمای دمو</a>

        <div class="admin-sidebar__section">محتوا</div>
        <a class="admin-sidebar__link {{ request()->is('admin/cranes*') ? 'is-active' : '' }}" href="{{ url('/admin/cranes') }}">⌁ جرثقیل‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/projects*') ? 'is-active' : '' }}" href="{{ url('/admin/projects') }}">▣ پروژه‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/articles*') ? 'is-active' : '' }}" href="{{ url('/admin/articles') }}">▤ مقاله‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/pages*') ? 'is-active' : '' }}" href="{{ url('/admin/pages') }}">□ صفحات</a>

        <div class="admin-sidebar__section">فروشگاه</div>
        <a class="admin-sidebar__link {{ request()->is('admin/products*') ? 'is-active' : '' }}" href="{{ url('/admin/products') }}">◇ محصولات</a>
        <a class="admin-sidebar__link {{ request()->is('admin/orders*') ? 'is-active' : '' }}" href="{{ url('/admin/orders') }}">≡ سفارش‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/leads*') ? 'is-active' : '' }}" href="{{ url('/admin/leads') }}">◎ درخواست‌ها</a>

        <div class="admin-sidebar__section">رسانه و سئو</div>
        <a class="admin-sidebar__link {{ request()->is('admin/media*') ? 'is-active' : '' }}" href="{{ url('/admin/media') }}">▧ رسانه‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/imports*') ? 'is-active' : '' }}" href="{{ url('/admin/imports') }}">⇣ ایمپورت‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/seo*') ? 'is-active' : '' }}" href="{{ url('/admin/seo') }}">⌕ تنظیمات SEO</a>
        <a class="admin-sidebar__link {{ request()->is('admin/redirects*') ? 'is-active' : '' }}" href="{{ url('/admin/redirects') }}">↪ ریدایرکت‌ها</a>

        <div class="admin-sidebar__section">سیستم</div>
        <a class="admin-sidebar__link {{ request()->is('admin/users*') ? 'is-active' : '' }}" href="{{ url('/admin/users') }}">♙ کاربران</a>
        <a class="admin-sidebar__link {{ request()->is('admin/roles*') ? 'is-active' : '' }}" href="{{ url('/admin/roles') }}">⚿ نقش‌ها</a>
        <a class="admin-sidebar__link {{ request()->is('admin/settings*') ? 'is-active' : '' }}" href="{{ url('/admin/settings') }}">⚙ تنظیمات</a>
        <a class="admin-sidebar__link {{ request()->is('admin/audit-log*') ? 'is-active' : '' }}" href="{{ url('/admin/audit-log') }}">◷ رویدادها</a>
    </aside>

    <div class="admin-main">
        <div class="demo-ribbon">پنل صرفاً نمایشی است — احراز هویت و permission واقعی در این مرحله اجرا نشده است</div>
        <header class="admin-topbar">
            <div>
                <strong>@yield('page-title', 'پنل مدیریت')</strong>
                <span class="muted text-small"> / اطلاعات آزمایشی</span>
            </div>
            <div class="cluster">
                <input class="input" style="width:250px;min-height:38px" value="جست‌وجوی نمایشی..." aria-label="جست‌وجوی نمایشی">
                <span class="badge badge--warning">۳ اعلان</span>
                <span class="badge badge--dark">مدیر آزمایشی</span>
            </div>
        </header>
        <main class="admin-content">@yield('content')</main>
    </div>
</div>
</body>
</html>
