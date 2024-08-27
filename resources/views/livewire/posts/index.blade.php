<div class="row">
    <div class="col-md-6">

        {{--
            include component livewire
            <livewire:posts.create />
            <folder-livewire:folder-posts.create-view-php-blade- />
        --}}
        <livewire:posts.create/>

    </div>
    <div class="col-md-6">
        @foreach($posts as $post)

            <livewire:posts.block :post="$post" wire:key="{{ $post->id }}" />

        @endforeach
    </div>
</div>
