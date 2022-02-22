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
                    <form method="POST" action="{{ route('category.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="email" required value="{{ $category->title }}" name="title"
                                class="form-control" style="width: 50%;" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Title">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <input type="hidden" name="id" value="{{ $category->id }}" id="">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select class="form-control" required name="status" style="width: 50%;" name="" id="">
                                <option value="active" default>Active</option>
                                <option value="inactive">InActive</option>
                            </select>
                        </div>
                        <button type="submit" style="background-color: blue;" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
