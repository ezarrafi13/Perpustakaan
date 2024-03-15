<x-app-layout>
    <div class="navbar bg-base-100">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl" href="/dashboard">daisyUI</a>
        </div>
        <div class="flex-none">
          <ul class="menu menu-horizontal px-1">
            <li><a href="/dashboard">Author</a></li>
            <li><a href="/publisher">Publisher</a></li>
            <li><a href="/book">Book</a></li>
          </ul>
        </div>
      </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="/postt" method="POST">
                @csrf
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <input type="text" placeholder="Masukkan nama" class="input input-bordered w-full max-w-xs" name="name" /><br><br>
                <input type="text" placeholder="Masukkan alamat" class="input input-bordered w-full max-w-xs" name="addres" /><br><br>
                <button class="btn btn-active btn-ghost">Submit</button>
            </form>
            </div>

            <div class="overflow-x-auto">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    @foreach ($Publisher as $item)
                    <tr>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->addres }}</td>
                      <td>
                        <button class="btn btn-warning"><a href="{{ route('postt.edit',$item->id) }}">Edit</a></button>

                        <form action="{{ route('postt.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-error" value="Delete">Delete</button>
                          </form>
                      </td>
                    </tr>                 
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</x-app-layout>
