<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="post" action="{{ route('lecturer.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Program studi</label>

            <select class="form-select @error('department_id') is-invalid  @enderror " id="department_id"
                name="department_id">
                <option value="">-- pilih program studi --</option>

                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" @selected(old('depatment_id') == $department->id)>
                        {{ $department->name }}
                    </option>
                @endforeach

            </select>

            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        {{-- untuk menampilkan gambar --}}

        <div class="mb-3">
            <img id="preview" src="{{ asset('images/no-image.png') }}" alt="xffxf" class="w-25 rounded"> <br>

            <label for="avatar" class="form-label">Upload Avatar</label>
            <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="upload"
                name="avatar">
            @error('avatar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>



        <a class="btn btn-warning" href="{{ route('lecturer.index') }}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</x-app>
