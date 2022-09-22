<div>
    <button id="{{$type}}Dropdown" data-dropdown-placement="top" data-dropdown-toggle="{{$type}}dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 break-all" type="button">
        {{$title}}
        <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    <div id="{{$type}}dropdown" class="hidden w-fit bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10.4px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
        <ul class="p-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="{{$type}}Dropdown">
            <!-- @foreach ($options as $option) -->
            <li class="">
                <a href="#{{$option}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$option}}</a>
            </li>
            <!-- @endforeach -->
            <li>
                <input type="text" name="{{$type}}Input" id="{{$type}}Input" placeholder="Manually enter {{$title}}" wire:change="valueChangeHandler($event.target.value)">
            </li>
        </ul>
    </div>
</div>