<x-app>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="card shadow p-3">
        <h5 class="fw-bold">{{ $title }}</h5>
    </div>

    <div class="card shadow p-3">
        CONTENT
    </div>

    @push('modals')
    @endpush

    @push('scripts')
    @endpush

</x-app>
