<div class="card">
    <div class="card-body">
        <div class="card-body">

            <h5 class="card-title">New Post</h5>

            <form wire:submit="save">
                <div class="mb-4">
                    <lable for="title" class="form-label">Title</lable>
                    <input wire:model="title" class="form-control" id="title" rows="3">
                    @error('title')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <lable for="body" class="form-label">Body</lable>
                    <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                    @error('body')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
