<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@extends('layouts.auth')
@section('title', 'Sign in to your account')
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
<div class="hidden md:block" x-data="{showModal: true}">
<div x-show="showModal" id="modal-container" class="flex">
    <div class="flex" id="modal">
        <div class="pt-6 flex flex-col w-full items-center">
        <h2 class="text-2xl font-semibold">Если вы рассматривается меня в качестве своего сотрудника</h2>
        <p class="text-medium">То, пожалуйста, авторизируйтесь под админом чтобы видеть полный функционал сайта</p>
        <div class="flex">
        <p>Email: komsomolradio@gmail.com </p>
        <p class="ml-1">Password: irkytsk87</p>
        </div>
        <button @click="{showModal = false}" class="mt-3 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Понял</button>
        </div>
    </div>
</div>
</div>

@section('content')
    <div>
        @livewire('auth.login')
    </div>
@endsection
</div>

