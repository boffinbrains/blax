@props([
    'size' => 'medium',
    'textAlign' => 'center',
    'fullWidth' => false,
    'icon' => null,
    'tone' => null,
    'variant' => null,
    'url' => null,
    'external' => false,
])

@once
    <style>
        [class*="Blax__Button"]:focus-visible {
            outline: 0.125rem solid #005bd3;
            outline-offset: 0.0625rem;
        }

        .Blax__Button {
            position: relative;
            display: inline-flex;
            justify-content: center;
            border: none;
            background: #fff;
            gap: 0.125rem;
            font-weight: 600;
            color: #303030;
            text-decoration: none;
            border-radius: 0.5rem;
            box-shadow: 0 -0.0625rem 0 0 #b5b5b5 inset, 0 0 0 0.0625rem rgba(0, 0, 0, .1) inset, 0 0.03125rem 0 0.09375rem #fff inset;
        }

        .Blax__Button:hover {
            background: #fafafa;
            color: #303030;
            box-shadow: 0 -0.0625rem 0 0 #b5b5b5 inset, 0 0 0 0.0625rem rgba(0, 0, 0, .1) inset, 0 0.03125rem 0 0.09375rem #fff inset;
        }

        .Blax__Button:active {
            background: #f7f7f7;
            color: #303030;
            box-shadow: -0.0625rem 0 0.0625rem 0 rgba(26, 26, 26, .122) inset, 0.0625rem 0 0.0625rem 0 rgba(26, 26, 26, .122) inset, 0 0.125rem 0.0625rem 0 rgba(26, 26, 26, .2) inset;
        }

        .Blax__Button[disabled] {
            background: rgba(0, 0, 0, .05);
            color: #b5b5b5;
            box-shadow: none;
            user-select: none;
            pointer-events: none;
        }

        .Blax__Button__Plain {
            border: none;
            display: inline-flex;
            justify-content: center;
            color: #005bd3;
            font-weight: 500;
            border-radius: 0.5rem;
        }

        .Blax__Button__Plain:hover {
            text-decoration: underline;
            color: #004299;
        }
    </style>
@endonce

@php
    $styles = [
        'width: 100%' => $fullWidth,
        "text-align: $textAlign",
    ];

    switch ($size) {
        default:
            $styles[] = 'padding: 0.375rem 0.75rem';
            $styles[] = 'font-size: 0.8125rem';
            break;
    }
@endphp

@if ($url)
    <a {{ $attributes }} @class([
        'Blax__Button' => $variant === null,
        'Blax__Button__Plain' => $variant === 'plain',
    ]) target="{{ $external ? '_blank' : '_self' }}"
        href="{{ $url }}" @style($styles)>
        <span>{{ $slot }}</span>
    </a>
@else
    <button {{ $attributes }} @class([
        'Blax__Button' => $variant === null,
        'Blax__Button__Plain' => $variant === 'plain',
    ]) @style($styles)>
        <span>{{ $slot }}</span>
    </button>
@endif
