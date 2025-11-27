<x-layout.app>

    <x-container>
        <x-card title="Editing link {{$link->id}}">

            <x-form :route="route('links.edit',$link)" put id="register-form">
                <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}"/>
                <x-input name="name" placeholder="Name" value="{{ old('name', $link->link) }}"/>

            </x-form>

            <x-slot:actions>
                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Update Link</x-button>
            </x-slot:actions>

        </x-card>
    </x-container>

</x-layout.app>
