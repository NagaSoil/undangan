@extends('layout.layauth')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-96">
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <h1 class="text-2xl font-bold mb-4 text-center">Daftar</h1>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1"></label>    
                    <input type="text" id="username" name="username" placeholder="Username" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"/>     
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1"></label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1"></label>
                    <input type="password" id="password" name="password" placeholder="Kata Sandi" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1"></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Kata Sandi" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"/>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Daftar</button>
            </form>
    </div>
</div>
@endsection
