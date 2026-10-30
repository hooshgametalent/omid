@extends('layouts.public')

@section('title', 'طراحی و ساخت جرثقیل صنعتی | فراز سازه کویر')
@section('description', 'نمونهٔ نمایشی معرفی خدمات طراحی، ساخت و پشتیبانی جرثقیل‌های صنعتی و فروش قطعات.')

@section('content')
<section class="page-hero" style="padding:86px 0">
    <div class="site-container grid grid--2" style="align-items:center;position:relative;z-index:1">
        <div>
            <span class="eyebrow">راهکار مهندسی از ایده تا بهره‌برداری</span>
            <h1 class="page-title" style="font-size:48px">طراحی و ساخت جرثقیل صنعتی، متناسب با خط تولید شما</h1>
            <p class="page-lead">از تحلیل نیاز و طراحی اختصاصی تا ساخت، نصب، راه‌اندازی و تأمین قطعات؛ همهٔ اطلاعات این صفحه برای نمایش اولیه آزمایشی‌اند.</p>
            <div class="cluster" style="margin-top:28px">
                <a class="button button--primary" href="{{ url('/quote') }}">درخواست مشاوره رایگان</a>
                <a class="button button--outline" style="border-color:#70869a;color:#fff" href="{{ url('/cranes') }}">مشاهده توانمندی‌ها</a>
            </div>
        </div>
        <div class="panel" style="background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.15);padding:18px">
            <x-visual-placeholder label="نمای آزمایشی جرثقیل سقفی دوپل" height="330px" />
            <div class="cluster space-between" style="margin-top:14px;color:#d2dde5;font-size:11px">
                <span>ظرفیت نمونه: تا ۸۰ تن</span><span>طراحی سفارشی</span><span>اطلاعات تأییدنشده</span>
            </div>
        </div>
    </div>
</section>

<section class="section--compact" style="background:#e8edf1">
    <div class="site-container grid grid--4">
        @foreach($demo['company']['stats'] as $stat)
            <div class="stat"><span class="stat__value">{{ $stat['value'] }}</span><span class="stat__label">{{ $stat['label'] }}</span></div>
        @endforeach
    </div>
</section>

<section class="section section--white">
    <div class="site-container">
        <x-section-heading eyebrow="توانمندی‌های ساخت" title="جرثقیل مناسب هر محیط صنعتی" description="صفحات این بخش محتوایی و فنی‌اند و با محصول فروشگاهی تفاوت دارند." :link="url('/cranes')" />
        <div class="grid grid--4">
            @foreach(array_slice($demo['cranes'], 0, 4) as $crane)
                <article class="card">
                    <x-visual-placeholder :label="$crane['title'].' — تصویر آزمایشی'" />
                    <div class="card__body">
                        <x-status-badge type="warning">{{ $crane['label'] }}</x-status-badge>
                        <h3 class="card__title" style="margin-top:12px">{{ $crane['title'] }}</h3>
                        <p class="card__text">{{ $crane['excerpt'] }}</p>
                        <a class="button button--soft" style="margin-top:16px" href="{{ url('/cranes/'.$crane['slug']) }}">مطالعه صفحه تخصصی</a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="site-container">
        <x-section-heading eyebrow="خدمات مهندسی" title="همراهی در چرخهٔ عمر تجهیز" description="ساختار و محتوای خدمات برای ارائه اولیه است." :link="url('/services')" />
        <div class="grid grid--4">
            @foreach($demo['services'] as $index => $service)
                <a class="panel" href="{{ url('/services/'.$service['slug']) }}">
                    <span class="eyebrow">۰{{ $index + 1 }}</span>
                    <h3 class="card__title">{{ $service['title'] }}</h3>
                    <p class="card__text">{{ $service['excerpt'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="section section--navy">
    <div class="site-container grid grid--2" style="align-items:center">
        <div>
            <span class="eyebrow">فروشگاه قطعات</span>
            <h2 style="font-size:30px;font-weight:950;margin:0 0 12px">قطعات موردنیاز تعمیر و نگهداری، در یک مسیر روشن</h2>
            <p style="color:#aebdca;font-size:13px">قیمت، موجودی و امکان خرید آنلاین در این نسخه صرفاً نمایشی است.</p>
            <a class="button button--primary" style="margin-top:18px" href="{{ url('/shop') }}">ورود به فروشگاه</a>
        </div>
        <div class="grid grid--3">
            @foreach(array_slice($demo['products'], 0, 3) as $product)
                <a class="card" href="{{ url('/shop/products/'.$product['slug']) }}">
                    <x-visual-placeholder :label="$product['title']" height="120px" />
                    <div class="card__body" style="padding:15px"><strong class="card__title" style="font-size:13px">{{ $product['title'] }}</strong><span class="badge badge--warning">{{ $product['stock'] }}</span></div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="section section--white">
    <div class="site-container">
        <x-section-heading eyebrow="نمونه پروژه" title="از مسئلهٔ فنی تا راهکار قابل بهره‌برداری" :link="url('/projects')" />
        <div class="grid grid--3">
            @foreach($demo['projects'] as $project)
                <article class="card">
                    <x-visual-placeholder :label="$project['title']" />
                    <div class="card__body"><span class="eyebrow">{{ $project['sector'] }}</span><h3 class="card__title">{{ $project['title'] }}</h3><p class="card__text">{{ $project['summary'] }}</p></div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="site-container panel" style="border-right:6px solid #f4b41a;display:flex;align-items:center;justify-content:space-between;padding:38px">
        <div><span class="eyebrow">شروع یک پروژه</span><h2 style="font-size:26px;font-weight:950;margin:0">برای انتخاب راهکار مناسب، ابتدا نیاز شما را می‌شنویم.</h2><p class="muted text-small">فرم این نسخه اطلاعاتی ارسال نمی‌کند.</p></div>
        <a class="button button--dark" href="{{ url('/quote') }}">ثبت درخواست آزمایشی</a>
    </div>
</section>
@endsection
