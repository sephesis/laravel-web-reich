@extends('layouts.app')

@section('title', $pageTitle . ' | ' . config('app.name'))

@section('content')
    <div class="row">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item"> <a class="breadcrumbs__link" href="">Главная</a></li>
            <li class="breadcrumbs__item breadcrumbs__item-active">Контакты</li>
        </ul>
        <div class="col-lg-4">
            <h1 class="h1">{{ $pageTitle }}</h1>
        </div>
        <div class="col-lg-8 align-self-center">
            <ul class="selection">
                <li class="selection__item">
                    <a class="selection__link {{ app('request')->input('solution_id') == '' ? 'active' : '' }}"
                        href="{{ route('project.list') }}">Все проекты</a>
                </li>
                @foreach ($solutions as $solution)
                    <li class="selection__item">
                        <a class="selection__link {{ app('request')->input('solution_id') == $solution->id ? 'active' : '' }}"
                            href="?solution_id={{ $solution->id }}">{{ $solution->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        @php $counter = 0;
        @endphp
        @foreach ($projects as $k => $project)
            @if (app('request')->input('solution_id') == '')
                @if ($counter === 0 || $counter === 4)
                    <div class="col-lg-4 mt-4">
                        <div class="project_divider"></div>
                    </div>
                    @if ($counter == 4)
                        <div class="col-lg-4 mt-4">
                            <div class="project_divider"></div>
                        </div>
                    @endif
                @endif
            @endif
            <div class="col-lg-4 mt-4">
                <a class="project" target="_blank" href="/projects/{{ $project->slug }}"
                    style="background: url({{ asset('storage/images/' . $project->img) }})');">
                    <div class="project__top">
                        <div style="background:{{ $project->color }}" class="project__symbol">
                            {{ mb_substr(mb_strtoupper($project->title), 0, 1) }}</div>
                        <div class="project__date">{{ date('d.m.Y', strtotime($project->p_date)) }}</div>
                    </div>
                    <div class="project__main">
                        <div class="project__tag">{{ $project->solution->title }}</div>
                        <div class="project__hr project__hr_pink"></div>
                        <div class="project__name">{{ $project->title }}</div>
                    </div>
                    <div class="project__bottom">
                        <div class="project__info">{{ $project->url }}</div>
                    </div>
                </a>
            </div>
            @php $counter++;
            @endphp
        @endforeach
        @if (app('request')->input('solution_id') == '')
            @if ($counter > $projectsCounter - 1)
                <div class="col-lg-4 mt-4">
                    <div class="project_divider"></div>
                </div>
            @endif
        @endif
    </div>
@endsection
