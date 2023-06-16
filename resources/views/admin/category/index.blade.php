<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Category') }}
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
                        <a href="{{ route('category.create')}}" class="btn btn-success">Add Category</a>
                    </div><br>
                        <div>
                            <table class="table table-primary text-black text-center">
                                <thead>
                                  <tr>
                                    <th scope="col">Serial No.</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Category Slug</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody class="text-black">
                                    @foreach ($category as $key=>$row)

                                        <tr>
                                            <th scope="row">{{++$key}}</th>
                                            <td>{{$row->category_name}}</td>
                                            <td> {{$row->category_slug}} </td>
                                            <td>
                                                <a href="{{route('category.edit', $row->id)}} " class="btn btn-info">Edit </a>
                                                <a href=" {{ route('category.delete', $row->id) }} " class="btn btn-danger">Delete </a>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                              </table>
                        </div>
                   </body>

                   </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
