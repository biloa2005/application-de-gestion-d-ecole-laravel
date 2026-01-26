<div class="mt-5">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
        <!-- titre et boutton creer-->
        <div class="flex justify-between items-center">
            <h4>Liste des Annees scolaires</h4>
            <a href="{{route('settings.create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">
                Nouvelle Annee Scolaire
            </a>
        </div>


        <div class="flex flex-col">
            <!-- MESSAGE QUI APPARAITRA APRES UNE OPERATION -->
            <div class="block p-2 bg-green-500 text-white rounded-sm shadow-sm mt-2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae quos beat
                ae corporis accusantium quaerat deleniti rerum, dolores rem.
            </div>
            <!-- styliser le tableau -->
             <div class="overflow-x-auto ">
                <div class="py-4 inline-block min-w-full ">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-50">
                                <tr>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b-2 border-gray-100">
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                </tr>
                                 <tr class="border-b-2 border-gray-100">
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-6">Libelle-exemple</th>
                                </tr>
                            </tbody>
                        </table>
                        <!-- pagination -->
                    </div>
                </div>
             </div>

        </div>
    </div>
</div>