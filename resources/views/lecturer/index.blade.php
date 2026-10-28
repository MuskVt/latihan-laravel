<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('lecturer.create') }}" role="button">Create</a>

    <table class="table table-bordered border-primary table-hover">
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
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->department->name }}</td>

                    <td>
                        <a class="btn btn-warning" href="{{ route('lecturer.edit', $lecturer) }}"
                            role="button">edit</a>

                        <form action ="{{ route('lecturer.destroy', $lecturer) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('anda yakin, data akan di hapus?')
                            ">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</x-app>
