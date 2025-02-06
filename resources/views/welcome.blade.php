{{-- @component('components.layout') --}}
            {{-- Notar que el atributo meta-title(referencias propiedades) se usa la convencion kebab-case 
            y en el layout (definir las propiedades) se usa  CamelCase --}}
<x-blog-layout meta-title="Home Title" meta-description="Home Description"> {{-- esto es equivqalente a lo de arriba --}}
    <h1 class="h1 text-center text-danger">Inicio</h1>


{{-- 
    <x-slot:sidebar> {{-- name="sidebar" 
        Home Sidebar
    </x-slot>
     --}}
</x-blog-layout>

{{-- @endcomponent --}}
