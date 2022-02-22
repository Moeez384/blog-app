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
                                <th>First</th>
                                <th>Last</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <th>{{ $category->title }}</th>
                                    <td>{{ $category->status }}</td>
                                    <td>
                                        <a class="btn btn-danger" style="background-color: red;"
                                            href="{{ route('category.delete', $category->id) }}">Delete</a>
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary"
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
