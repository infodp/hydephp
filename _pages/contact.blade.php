@extends('hyde::layouts.app')
@section('content')
@php($title = "Contact")

<main class="mx-auto max-w-7xl py-16 px-8">
    <h1 class="text-center text-3xl font-bold mb-8 text-gray-900 dark:text-gray-100">Contact</h1>

    <div class="flex justify-center">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 w-full max-w-md">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 text-center mb-6">Contáctanos</h2>
            <form>                
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Ingresa tu nombre"
                    >
                </div>               
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Correo Electrónico</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Ingresa tu correo electrónico"
                    >
                </div>                
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mensaje</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="4" 
                        class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="Escribe tu mensaje"
                    ></textarea>
                </div>                
                <div class="mt-6">
                    <button 
                        type="submit" 
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
