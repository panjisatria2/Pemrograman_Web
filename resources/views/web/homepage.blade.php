<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        {{-- Card --}}
        @include('components.card')

        {{-- alerts --}}
        @include('components.alerts')

</x-layout>