<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="post" action="{{ route('lecturer.store') }}">
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

        <a class="btn btn-warning" href="{{ route('lecturer.index') }}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</x-app>
