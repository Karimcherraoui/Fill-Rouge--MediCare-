<template>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-8">Historique médical</h1>

        <!-- Tableau de l'historique médical -->
        <table class="table-auto w-full mb-8">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in history" :key="item.id">
                    <td class="border px-4 py-2 bg-gray-100">{{ index + 1 }}</td>
                    <td class="border px-4 py-2 bg-gray-100">{{ item.date }}</td>
                    <td class="border px-4 py-2 bg-gray-100">{{ item.type }}</td>
                    <td class="border px-4 py-2 bg-gray-100">{{ item.description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
  
<script>
export default {
    data() {
        return {
            history: [
                {
                    id: 1,
                    date: '2022-03-15',
                    type: 'Consultation',
                    description: 'Le patient s\'est plaint de douleurs abdominales.'
                },
                {
                    id: 2,
                    date: '2021-11-22',
                    type: 'Chirurgie',
                    description: 'Le patient a subi une appendicectomie.'
                },
                {
                    id: 3,
                    date: '2021-05-03',
                    type: 'Consultation',
                    description: 'Le patient a été diagnostiqué avec une pneumonie.'
                },
          {
                    id: 4,
                    date: '2022-03-15',
                    type: 'Consultation',
                    description: 'Le patient s\'est plaint de douleurs abdominales.'
                },
                {
                    id: 5,
                    date: '2021-11-22',
                    type: 'Chirurgie',
                    description: 'Le patient a subi une appendicectomie.'
                },
                {
                    id: 6,
                    date: '2022-03-15',
                    type: 'Consultation',
                    description: 'Le patient s\'est plaint de douleurs abdominales.'
                },
                {
                    id: 7,
                    date: '2021-11-22',
                    type: 'Chirurgie',
                    description: 'Le patient a subi une appendicectomie.'
                },
                {
                    id: 8,
                    date: '2022-03-15',
                    type: 'Consultation',
                    description: 'Le patient s\'est plaint de douleurs abdominales.'
                },
                {
                    id: 9,
                    date: '2021-11-22',
                    type: 'Chirurgie',
                    description: 'Le patient a subi une appendicectomie.'
                },
            ]
        }
    }
}
</script>
  
<style>
/* Styles spécifiques à Tailwind CSS */
</style>
  