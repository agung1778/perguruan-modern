@extends('layouts.app')

@section('content')

@include('components.sections.hero')

@include('components.sections.welcome')

@include('components.sections.foundation', [
    'leader' => $leader
])

@include('components.sections.about')

@include('components.sections.statistics')

@include('components.sections.units')

@include('components.sections.organization')

@include('components.sections.news')

@include('components.sections.agenda')

@include('components.sections.gallery')

@include('components.sections.testimonial')

@include('components.sections.contact')

@endsection