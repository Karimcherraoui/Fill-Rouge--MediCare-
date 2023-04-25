<template>
    <div class="p-8 rounded border bg-white border-gray-200">
        <h1 class="font-medium text-3xl">Add Room</h1>

        <form @submit.prevent="addRoom">
            <div class="mt-8 space-y-6">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Room Number</label> <input
                      v-model="room_number"  type="text" name="room_number" id="room_number"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="Enter Room Number" /> </div>
                <div> <label for="type" class="text-sm text-gray-700 block mb-1 font-medium">Type</label> <input type="text"
                    v-model="type"    name="type" id="type"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="Private room" /> </div>
                <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">Statut</label> <input
                    v-model="statut"   type="text" name="statut" id="statut"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="Dispo" /> </div>
            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <!-- Secondary -->
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            room_number: '',
            type: '',
            statut: '',
            error: false
        }
    },
    methods: {

        addRoom() {
            if (this.room_number === '' || this.type === '' || this.statut === '') {
                this.error = true
            } else {
                axios.post('http://127.0.0.1:8000/api/room/store', JSON.stringify({
                    'room_number': this.room_number,
                    'type': this.type,
                    'statut': this.statut,

                }), {
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {


                        if (response.data.message === 'Room created') {
                            this.$router.go(-1); // Navigate to the previous page
                        }
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }
        }

    },
    //   computed: {
    //     signupForm() {
    //       return !(this.nom === '' || this.prenom === '' || this.phone === '' || this.email === '')
    //     }
    //   }
}
</script>

<style></style>