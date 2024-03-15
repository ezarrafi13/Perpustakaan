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
            <form action="/posttt" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <select class="select select-bordered w-full max-w-xs" name="name">
                    @foreach ($Author as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select><br><br>
                <input type="text" placeholder="Masukkan judul" class="input input-bordered w-full max-w-xs" name="title" /><br><br>
                <input type="text" placeholder="Masukkan tahun" class="input input-bordered w-full max-w-xs" name="year" /><br><br>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="cover" /><br><br>
                <button class="btn btn-active btn-ghost">Submit</button>
            </form>
            </div>

            <div class="overflow-x-auto">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Year</th>
                      <th>Cover</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    @foreach ($Book as $item)
                    <tr>
                      <td>{{ $item->Author->name }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->year }}</td>
                      <td><img src="{{ asset('storage/' . $item->cover) }}" alt="" width="60"></td>
                      <td>
                        <button class="btn btn-warning"><a href="{{ route('posttt.edit',$item->id) }}">Edit</a></button>

                        <form action="{{ route('posttt.destroy', $item->id) }}" method="post">
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
