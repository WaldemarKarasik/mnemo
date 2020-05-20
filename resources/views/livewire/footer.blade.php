<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <footer x-data = "{showAb: false}" class="hidden md:fixed md:bottom-0 md:h-20 md:bg-teal-600 md:w-full md:flex md:justify-between">
        <div class="flex items-center justify-between">
            <div class="flex justify-around">
                <span><i class="fab fa-github-square"></i></span>
                <p>h</p>
            </div>
        </div>
        <div class="w-7/12 flex flex-col justify-center bg-red-500">
            <div id="hidden" style="visibility: hidden;"class="flex items-center bg-blue-500 text-white text-sm font-bold px-4" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>Something happened that you should know about.</p>
              </div>
        <div class="flex items-center text-teal-300">
            <button wire:click="$emit('tailClicked')">Click</button>
            <p class="text-xs">Built with the <span @click="{showAb = true}">TALL</span> stack</p>

        </div>
        {{-- <div x-show="showAb" class="">
            <p class="text-sm text-teal-300 font-bold">tailwindcss&alpine.js&laravel&livewire</p>
        </div> --}}

        </div>


    </footer>

</div>
<script>
    window.livewire.on('tailClicked', () => {
        var element = document.getElementById('hidden');
        element.removeAttribute('style');
    });
</script>

