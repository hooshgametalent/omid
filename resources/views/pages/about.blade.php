@extends('layouts.public')
@section('title', 'درباره فراز سازه کویر | نمونه نمایشی')
@section('description', 'آشنایی با رویکرد مهندسی، فرایند و ظرفیت‌های نمونه شرکت سازنده جرثقیل صنعتی.')
@section('content')
<x-page-hero eyebrow="درباره مجموعه" title="مهندسی برای حرکت مطمئن‌تر صنعت" lead="این روایت، آمار و سوابق صرفاً برای نمایش ساختار صفحه‌اند و باید با اطلاعات واقعی کارفرما جایگزین شوند." />
<x-breadcrumb :items="['درباره ما' => url('/about')]" />
<section class="section section--white">
    <div class="site-container grid grid--2" style="align-items:center">
        <x-visual-placeholder label="تصویر کارخانه یا تیم — آزمایشی" height="390px" />
        <div><span class="eyebrow">داستان آزمایشی برند</span><h2 style="font-size:30px;font-weight:950;margin:0 0 14px">از شناخت فرایند تولید تا ساخت تجهیز متناسب</h2><p class="muted">{{ $demo['company']['summary'] }}</p><p class="muted">در نسخهٔ نهایی، تاریخچه، گواهی‌ها، ظرفیت تولید، تیم مهندسی و محدودهٔ خدمات تنها با مدارک و اطلاعات تأییدشده منتشر می‌شوند.</p><div class="grid grid--2" style="margin-top:22px"><div class="panel"><strong>رویکرد مهندسی</strong><p class="card__text">تصمیم براساس داده، محدودیت محیط و سیکل واقعی کار.</p></div><div class="panel"><strong>پشتیبانی چرخه عمر</strong><p class="card__text">نمایش مسیر تأمین قطعه، نگهداری و نوسازی.</p></div></div></div>
    </div>
</section>
<section class="section"><div class="site-container"><x-section-heading eyebrow="ارزش‌های پیشنهادی" title="چه چیزی باید ما را قابل اعتماد کند؟" /><div class="grid grid--4"><div class="panel"><span class="eyebrow">01</span><h3 class="card__title">شفافیت فنی</h3><p class="card__text">ثبت فرض‌ها، محدودیت‌ها و معیارهای تحویل.</p></div><div class="panel"><span class="eyebrow">02</span><h3 class="card__title">ایمنی در طراحی</h3><p class="card__text">ادعاهای ایمنی پس از تأیید مستندات واقعی.</p></div><div class="panel"><span class="eyebrow">03</span><h3 class="card__title">ساخت متناسب</h3><p class="card__text">پرهیز از یک نسخهٔ ثابت برای همهٔ سالن‌ها.</p></div><div class="panel"><span class="eyebrow">04</span><h3 class="card__title">پاسخ‌گویی</h3><p class="card__text">تعریف مسیر روشن برای درخواست و پیگیری.</p></div></div></div></section>
<section class="section section--navy"><div class="site-container grid grid--4">@foreach($demo['company']['stats'] as $stat)<div><span style="font-size:34px;font-weight:950;color:#f4b41a">{{ $stat['value'] }}</span><p style="color:#afbeca;font-size:12px">{{ $stat['label'] }}</p></div>@endforeach</div></section>
@endsection
