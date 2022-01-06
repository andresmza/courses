<form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
    <input wire:model="search"
        class="w-full border-2 border-gray-500 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        type="search" name="search" placeholder="Buscar">
    <button type="submit"
        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
        Buscar
    </button>

    @if ($search)
    <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
        @forelse ($this->results as $result)
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
            <a href="{{route('courses.show', $result)}}">{{$result->title}}</a>
        </li>
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
            <a href="{{route('courses.show', $result)}}">{{$search}}</a>
        </li>
        @empty
        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
            No hay ninguna coincidencia
        </li>
        @endforelse
    </ul>
    @endif
</form>