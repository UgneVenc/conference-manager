@extends('layouts.app')

@section('title', $conference->title)

@section('content')
    <article>
        <h1 class="mb-4">{{ $conference->title }}</h1>

        <dl>
            <dt>{{ __('site.conference_date') }}</dt>
            <dd>{{ $conference->conference_date->format('Y-m-d') }}</dd>

            <dt>{{ __('site.conference_address') }}</dt>
            <dd>{{ $conference->address }}</dd>

            <dt>{{ __('site.conference_description') }}</dt>
            <dd>{{ $conference->description }}</dd>
        </dl>
    </article>

    <a class="btn btn-outline-secondary" href="{{ route('conferences.index') }}">
        {{ __('site.back_to_conferences') }}
    </a>
@endsection