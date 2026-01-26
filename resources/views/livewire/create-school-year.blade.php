<div class="p-2 bg-white shadow-sm">
   <form method="POST" wire:submit.prevent="store">
    @csrf
    @method("post")
    <div class="p-5">
       <x-label :value="__('Libelle de l\'annee scolaire')" />

        <input type="text" class="block rounded-md border-gray-300 
        w-full
        " wire:model="libelle">

    </div>
    <div class="p-5 flex justify-between items-center">
        <button class="bg-red-600 p-3 rounded-sm text-white text-sm" >Annuler</button>
        <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm">Ajouter</button>
    </div>
   </form>
</div>
