<div class="card">
    <div class="card-body">
        <div class="card-body">

            <h5 class="card-title">New Post</h5>

            <form wire:submit="save">
                <div class="mb-4">
                    <lable for="title" class="form-label">Title</lable>
                    {{--

                        wire:model="form.title" // karena kita implementasi livewire:form,, jadi ada prefix form
                        @error('form.title') // karena kita implementasi livewire:form
                    --}}
                    <input wire:model="form.title" class="form-control" id="title" rows="3">
                    @error('form.title')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <lable for="body" class="form-label">Body</lable>
                    <textarea wire:model="form.body" class="form-control" id="body" rows="3"></textarea>
                    @error('form.title')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
