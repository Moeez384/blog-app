<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <th>{{ $blog->title }}</th>
                                    <td>{{ $blog->category }}</td>
                                    <td>
                                        <a class="btn btn-danger" style="background-color: red;"
                                            href="{{ route('blog.delete', $blog->id) }}">Delete</a>
                                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary"
                                            style="background-color: blue;" href="">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
