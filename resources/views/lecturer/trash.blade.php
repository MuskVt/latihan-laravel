<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered border-primary table-hover" id="example">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Lecturer</th>
                <th scope="col">Deparment</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($lecturers as $lecturer)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{ $lecturer->avatar ? asset('storage/' . $lecturer->avatar) : asset('images/no-image.png') }}"
                            width="50">
                        {{ $lecturer->name }}
                    </td>
                    <td>{{ $lecturer->department->name }}</td>

                    <td>

                        <form action ="{{ route('lecturer.restore', $lecturer) }}" method="post" class="d-inline">
                            @csrf
                            @method('put')

                            <button type="submit" class="btn btn-warning"
                                onclick="return confirm('anda yakin, data akan di pulihkan')
                                ">Restore</button>
                        </form>

                        <form action ="{{ route('lecturer.forceDelete', $lecturer) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('anda yakin, data akan di hapus secara permanenen?')
                            ">perma
                                delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</x-app>
