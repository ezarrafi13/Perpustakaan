<x-app-layout>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('posttt.update', $Book->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <select class="select select-bordered w-full max-w-xs" name="name">
                    @foreach ($Author as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select><br><br>
                <input type="text" placeholder="{{ $Book->title }}" class="input input-bordered w-full max-w-xs" name="title" /><br><br>
                <input type="text" placeholder="{{ $Book->year }}" class="input input-bordered w-full max-w-xs" name="year" /><br><br>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="cover" /><br><br>
                <button class="btn btn-active btn-ghost">Submit</button>
            </form>
            </div>
</x-app-layout>
