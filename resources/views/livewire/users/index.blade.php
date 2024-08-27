<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Joined</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr wire:key="{{ $user->id }}">
                <th scope="row">{{ $loop->index + $users->firstItem() }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d F, Y') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- perlu di ingat, bahwa livewire by default pagination menggunakan tailwind--}}
    {{-- pagination laravel/bootstrap--}}
    {{-- jika ingin perlu menggunakan di component --}}
    {{ $users->links() }}

</div>
