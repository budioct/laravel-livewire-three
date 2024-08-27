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

        {{--
            active or inactive lazy loading pada component timeline
            <lazy="true or false" />
        --}}
        <livewire:posts.index lazy="true" />

    </div>
</div>
