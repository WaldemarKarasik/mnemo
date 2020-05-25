{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}

<div id="wrapper" x-data="{show: false, showModal: false, showDelBtn: true, showDelInp:false}" class="h-screen">

    <div class="pt-7">
    <div class="text-center">
    <h1 class="pt-7 text-3xl text-teal-300 border-b">Admin panel</h1>
    </div>
    <div x-show="showModal">
        <style>
            #modal-container {
                position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: 1;
                background-color: rgba(0,0,0,0.7);
            }
            #modal {
                background-color: #f4f4f4;
                width: 70%;
                height: 30%;
                margin: 20% auto;
            }
            </style>
            <div id="modal-container">
                <div id="modal">
                    <div class="flex justify-between">
                    <div class="mt-2 w-full flex flex-col space-y-2 items-center">
                        <input x-ref="input" type="text" id="#target" class="border-2" x-on:keydown.enter="keyPressed()" wire:model.debouce.1000="newCategory">
                    </div>
                    <div class="text-3xl"><span @click="{showModal=false}" class="cursor-pointer text-red-500">&times</span></div>
                    </div>
                </div>

            </div>
            <script>
                function keyPressed() {
                    window.livewire.emit('enterPressed')
                }
                $(document).ready(() => {
                    // window.livewire.on('enterPressed', () => {
                    // alert('enter pressed')
                    // });
                })
            </script>
    </div>
    <h1 class="tracking-wide text-2xl leading-tight">Available manipulations with categories:</h1>

    <ul class="space-y-2">
        <li>
            <button
            class="cursor-pointer border-2 border-green-500 rounded p-1 transition duration-500 ease-in-out hover:text-green-600 hover:border-green-300 focus:outline-none transform hover:translate-x-2"
            @click="{showModal=true, $nextTick(()=> $refs.input.focus())}">
            Create
            </button>
        </li>

        <div class="">@error('message') <span class="text-red-500">{{$message}}</span>@enderror</div>
        <div @click.away = "{showDelInp = false, showDelBtn = true, @this.call('removeError')}"
        class="flex w-2/12">
        <li class=" cursor-pointer border-2 border-red-500 rounded p-1 transition duration-500 ease-in-out hover:text-red-600 hover:border-red-300 transform hover:translate-x-2" x-show="showDelBtn" @click="{showDelInp = true, $nextTick(()=>$refs.delete.focus()), showDelBtn=false}">Delete</li>

        <input class="py-1 px-3 w-full border-2 focus:outline-none {{($emptyError) ? 'border-red-500' : ''}}" x-show="showDelInp" id="deleteInp"  x-ref="delete" wire:model="categoryName" @keydown.enter = "enterDeletePressed()" type="text" placeholder="Category name">
        </div>

    </ul>
    </div>
</div>

<script>
    var ua = new UAParser()
    var result = ua.getResult()
    $(document).ready(function() {

        if(result.os.name != "Windows" && result.os.name != "Linux" && result.os.name != "MacOs") {

        osRefusal()
    } else {
        alert("Try to enter this route with mobile device via your web browser's dev tools")

    }
    function osRefusal() {
        var nav = document.getElementById("nav")
        var body = document.querySelector("body")
        nav.remove()
        wrapper.remove()
        window.livewire.emit('osRefusal')
    }
    })



    function enterPressed() {
        window.livewire.emit('createClicked')
    }
    function enterDeletePressed() {
        window.livewire.emit('enterDeletePressed')
    }
    window.livewire.on('refreshRequired', () => {
        location.reload(true)
    })
</script>
