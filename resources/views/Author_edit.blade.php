<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('post.update', $Author->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <input type="text" placeholder="{{ $Author->name }}" class="input input-bordered w-full max-w-xs" name="name" /><br><br>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="foto" /><br><br>
                <button class="btn btn-active btn-ghost">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
