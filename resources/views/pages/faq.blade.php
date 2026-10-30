@extends('layouts.public')
@section('title', 'پرسش‌های متداول | نمونه نمایشی')
@section('description', 'پاسخ‌های آزمایشی به پرسش‌های رایج طراحی جرثقیل و خرید قطعات.')
@section('content')
<x-page-hero eyebrow="پرسش‌های متداول" title="پیش از شروع همکاری چه باید بدانید؟" lead="پاسخ‌ها placeholder هستند و نباید به‌عنوان تعهد تجاری یا فنی استفاده شوند." />
<x-breadcrumb :items="['پرسش‌های متداول' => url('/faq')]" />
<section class="section"><div class="site-container grid grid--detail"><div class="stack">@foreach($faqs as $index => $faq)<details class="panel" @if($index === 0) open @endif><summary style="cursor:pointer;font-weight:900">{{ $faq['question'] }}</summary><p class="muted text-small" style="margin:14px 0 0">{{ $faq['answer'] }}</p></details>@endforeach</div><aside class="panel" style="align-self:start;border-top:4px solid #f4b41a"><span class="eyebrow">پاسخ را پیدا نکردید؟</span><h2 class="card__title" style="font-size:21px">سؤال فنی خود را مطرح کنید</h2><p class="card__text">در نسخهٔ واقعی، مقصد و زمان پاسخ‌گویی مشخص می‌شود.</p><a class="button button--dark" style="margin-top:18px" href="{{ url('/contact') }}">ارتباط با ما</a></aside></div></section>
@endsection
