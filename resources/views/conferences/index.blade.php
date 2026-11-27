@extends('layouts.app')

@section('title', __('site.conferences'))

@section('content')
    <h1 class="mb-4">{{ __('site.conferences') }}</h1>

    <div class="row g-3">
        @forelse ($conferences as $conference)
            <div class="col-12 col-md-6 col-lg-4">
                <article class="card h-100">
                    <div class="card-body">
                        <h2 class="h5">{{ $conference->title }}</h2>
                        <p class="mb-1">{{ $conference->conference_date->format('Y-m-d') }}</p>
                        <p>{{ $conference->address }}</p>

                        <a class="btn btn-outline-primary"
                           href="{{ route('conferences.show', $conference) }}"
                           aria-label="{{ __('site.view_conference') }} – {{ $conference->title }}">
                            {{ __('site.view_conference') }}
                        </a>
                    </div>
                </article>
            </div>
        @empty
            <p>{{ __('site.no_conferences') }}</p>
        @endforelse
    </div>
@endsection