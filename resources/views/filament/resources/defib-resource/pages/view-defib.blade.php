<div>
    <x-filament::app-header
        :breadcrumbs="static::getBreadcrumbs()"
        :title="$title"
    >
        <x-slot name="actions">
            <a href="/admin/resources/defibs/{{$record->id}}/edit">Edit</a>
        </x-slot>
    </x-filament::app-header>

    <x-filament::app-content class="space-y-6">
        <form class="space-y-6">
            <x-forms::form :schema="$this->getForm()->getSchema()" :columns="$this->getForm()->getColumns()" />
        </form>
    </x-filament::app-content>
</div>
