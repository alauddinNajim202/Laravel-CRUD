<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <!doctype html>
                   <html lang="en">
                   <head>
                     <title>Title</title>
                     <meta charset="utf-8">
                     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
                   </head>

                   <body>
                        <a href="{{ route('category.index')}}" class="btn btn-primary">All Category</a>
                   </body>

                   </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
