<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('lecturer.index') }}" role="button">Back</a>

    <div class="card" style="width: 18rem;">
        <img src="{{ $lecturer->avatar ? asset('storage/' . $lecturer->avatar) : asset('images/no-image.png') }}"
            class="card-img-top" alt="{{ $lecturer->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $lecturer->name }}</h5>
            <p class="card-text">Departement {{ $lecturer->name }}</p>
            <p class="card-text">Last update {{ $lecturer->updated_at->diffForHumans() }}</p>
        </div>
    </div>


</x-app>
