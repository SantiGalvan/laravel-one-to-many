@extends('layouts.app')

@section('title', 'Home')

@section('title', 'Home')

@section('content')
<section id="projects-card">
    <div class="row mb-4">
        <h1 class="text-center my-4">Progetti</h1>
        @forelse ($projects as $project)
        <div class="col-4">
            <div class="card my-4">
                <div class="card-header text-center">
                    <h3>{{$project->title}}</h3>
                </div>
                <div class="card-body text-center">
                    <img src="{{asset('storage/'. $project->image)}}" alt="{{$project->title}}" class="img-fluid mb-3">
                    <div><strong>Linguaggio:</strong> {{$project->language}}</div>
                    <div><strong>Framework:</strong> {{$project->framework}}</div>
                    <div class="mt-2"><strong>Creato il:</strong> {{$project->created_at}}</div>
                    <div><strong>Ultima modifica:</strong> {{$project->updated_at}}</div>
                    <div class="mt-4"><a href="{{route('guest.projects.show', $project->id)}}" class="btn btn-lg btn-primary"><i class="fa-solid fa-magnifying-glass me-2"></i>Vedi</a></div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body">
                    <h4 class="text-center my-4">Al momento non ci sono progetti</h4>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($projects->hasPages())
     {{$projects->links()}}
    @endif
</section>
@endsection