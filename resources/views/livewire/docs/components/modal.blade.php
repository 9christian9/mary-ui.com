<?php

use Livewire\Volt\Component;

new class extends Component
{
    public bool $myModal = false;
}

?>

<div>

<x-markdown>
# Modal

### Native HTML

Note the following examples that `onclick` , `.showModal()` and `.close()` are native HTML stuff, not Mary/Livewire/Alpine.

</x-markdown>

<br>

<x-code>
@verbatim
 <!-- Note `onclick` is HTML -->
<x-button label="Open modal" class="btn-primary" onclick="modal17.showModal()" />

 <!-- Here is modal`s ID -->
<x-modal id="modal17" title="Are you sure?">
    Click "cancel" or press ESC to exit.

    <x-slot:actions>
         <!-- Note `onclick` is HTML -->
        <x-button label="Cancel" onclick="modal17.close()" />
        <x-button label="Confirm" class="btn-primary" />
    </x-slot:actions>
</x-modal>
@endverbatim
</x-code>


<x-markdown>
### With Livewire

**You don't need** `id="xxx"`.  

You can toggle visibility with Livewire or Alpine. In both cases you need `wire:model`. In the following example, we consider you have declared:

<x-code no-render language="php">
public bool $myModal = false;
</x-code>
<br>
</x-markdown>

<x-code class="flex gap-5">
@verbatim
<!-- Livewire: fires network request -->
<x-button label="Livewire" class="btn-primary" wire:click="$toggle('myModal')" />
<!-- Alpine: no network request -->
<x-button label="Alpine" class="btn-warning" @click="$wire.myModal = true" />

 <!-- Note `wire:model`, no `id="xxx"` -->
<x-modal wire:model="myModal" title="Hello" subtitle="Livewire example" separator>
    Click "cancel" or press ESC to exit.
    <x-slot:actions>         
        <x-button label="Cancel" @click="$wire.myModal = false" />
        <x-button label="Confirm" class="btn-primary" />
    </x-slot:actions>
</x-modal>
@endverbatim
</x-code>

</div>