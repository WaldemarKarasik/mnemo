<div class="flex justify-between text-gray-100 bg-teal-600 ">
    <div>
    <div class="container py-9">


        {{-- <hr class="h-px mt-2 bg-gray-700 border-none"> --}}
        <div class="flex flex-col items-center justify-center md:flex-row">

            <div class="flex md:m-0">
                <div class="flex">
                  <a href="https://github.com/WaldemarKarasik/mnemo" target="_blank" class="px-4 text-sm"><img src="https://img.icons8.com/material-sharp/24/000000/github.png"/></a>
                  </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex items-center text-sm w-60">
        <p class="ml-4">Built with the <a href="https://tallstack.dev/" target="_blank" class="hover:text-teal-400 cursor-pointer">TALL</a> stack</p>
    </div>

</div>
<script>
    window.livewire.on('tailClicked', () => {
        var element = document.getElementById('hidden');
        element.removeAttribute('style');
    });
</script>

