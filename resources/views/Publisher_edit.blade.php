<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('postt.update', $Publisher->id) }}" method="POST">
                @method('PUT')
                @csrf
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <input type="text" placeholder="{{ $Publisher->name }}" class="input input-bordered w-full max-w-xs" name="name" /><br><br>
                <input type="text" placeholder="{{ $Publisher->addres }}" class="input input-bordered w-full max-w-xs" name="addres" /><br><br>
                <button class="btn btn-active btn-ghost">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
