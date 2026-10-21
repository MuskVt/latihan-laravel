<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('student.create') }}" role="button">Create</a>

    <table class="table table-bordered border-primary table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('student.edit', $student) }}" role="button">edit</a>

                        <form action ="{{ route('student.destroy', $student) }}" method="post" class="d-inline">
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
