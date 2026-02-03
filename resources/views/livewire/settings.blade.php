<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        <!-- titre et boutton creer-->
        <div class="flex justify-between items-center">
            <input type="text" class="block rounded-md border-gray-300
      
        w-full
        " placeholder="Recherche"
        wire:model.live="search">
            <a href="{{route('settings.create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">
                Nouvelle Annee Scolaire
            </a>
        </div>


        <div class="flex flex-col">
            <!-- MESSAGE QUI APPARAITRA APRES UNE OPERATION -->
            <!-- <div class="block p-2 bg-green-500 text-white rounded-sm shadow-sm mt-2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae quos beat
                ae corporis accusantium quaerat deleniti rerum, dolores rem.
            </div> -->
            @if(Session::get("success"))
    <div class="p-5">
        <div class="block p-2 bg-green-500 text-white rounded-sm shadow-sm mt-2">{{Session::get("success")}}</div>
    </div>
     @endif
            <!-- styliser le tableau -->
             <div class="overflow-x-auto ">
                <div class="py-4 inline-block min-w-full ">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-50">
                                <tr>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">id</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Annee Scolaire</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Status</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($schoolYearList as $item )
                                <tr class="border-b-2 border-gray-100">
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">{{$item->id}}</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">{{$item->school_year}}</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">@if($item->active >= 1)
                                                <span class="p-1 bg-green-400 text-sm text-white rouded-sm ">Active</span>                                        
                                        @else
                                             <span class="p-1 bg-red-400 text-sm text-white rouded-sm ">Inactive</span>
                                        @endif

                                    </th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">
                                        @if($item->active>=1)
                                                  <button class="p-2 text-white bg-red-400 rounded-sm text-sm ">Rendre Inatif</button>
                                            @else
                                            <button class="p-2 text-white bg-green-400 rounded-sm text-sm ">Rendre Actif</button>                   
                                        @endif
                                    </th>
                                </tr>
                                @empty
                                @endforelse
                            
                              
                              
                            </tbody>
                        </table>
                        <!-- pagination -->
                        <div class="mt-1">
                                {{$schoolYearList->links()}}
                                </div>

                    </div>
                </div>
             </div>

        </div>
    </div>
</div>