<div>
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Login</h5>

            <form wire:submit="login">
                <div class="mb-4">
                    <lable for="email" class="form-label">Email</lable>
                    <input wire:model="email" class="form-control" id="email">
                    @error('email')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <lable for="password" class="form-label">Password</lable>
                    <input wire:model="password" type="password" class="form-control" id="password">
                    @error('password')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>
</div>
