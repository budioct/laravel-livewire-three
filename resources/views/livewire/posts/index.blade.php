<div>

    @foreach($posts as $post)

        {{--
            include component livewire
            <livewire:posts.block />
            <folder-livewire:folder-posts.block-view-php-blade- />

            <:post="$post">
            <:key="$value"> key yang akan di binding pada model component Block

            <wire:key="{{ $post->id }}>
            event listener supaya reaktif terjadi pada antar component

        --}}
        <livewire:posts.block :post="$post" wire:key="{{ $post->id }}"/>

    @endforeach

</div>
