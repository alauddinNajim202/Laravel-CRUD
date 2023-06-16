<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category') }}
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
                    <div>
                        <a href="{{ route('category.index')}}" style="float: right;" class="btn btn-warning">Update Category</a>
                    </div><br><br><br>

                    <div>
                        <form action=" {{route('category.update',$data->id)}}" method="post" >
                            @csrf
                            <div class="mb-3">
                              <label  class="form-label">Category Name</label>
                              <input type="text" name="category_name" class="form-control"  value="{{ $data->category_name }}"><br>

                            </div><br>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                    </div>

                   </body>

                   </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
