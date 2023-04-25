<template>
    <!-- <headerComp></headerComp> -->
    
      <div class="mainpage bg-gray-200 w-4/6  mx-auto max-w-screen-xl p-4 py-12 rounded-xl sm:px-6 lg:px-8 my-20">
        <div class="mx-auto max-w-lg   rounded-lg ">
          <h1 class="text-center text-2xl font-bold text-green-700 sm:text-3xl">
            To choose your date appointment
          </h1>
  
         
          <div class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl">
  
            <div>
              <label for="day" class="block mb-2 text-sm font-medium text-green-800 dark:text-white">Select Day</label>
              <div class="relative mt-1">
                <div>
                  <input :min="today"
                    class="bg-green-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    v-model="month" type="date">
                </div>

                

                
              </div>
            </div>
  
            <div v-if="show">
              <!-- {{ taken }} -->
              <label for="heure" class="text-sm font-medium">heure</label>
              <div  class="grid grid-cols-3 gap-2"> 
              <div class="relative mt-1" v-for="h in heure " :key="h">
  
                <div v-if="taken.heure.includes(h)">
                  <div v-if="taken.client[taken.heure.indexOf(h)] === local" v-on:click="now(h)"
                    class="taken transform hover:scale-105 transition duration-300 shadow-xl rounded-lg p-4 bg-blue-200 taken-by-current-client">
                    {{ h }}
                  </div>
                  <div v-else v-on:click="now(h)"
                    class="taken transform hover:scale-105 transition duration-300 shadow-xl rounded-lg p-4 bg-red-200 taken-by-other-client">
                    {{ h }}
                  </div>
                </div>
                <div v-else v-on:click="now(h)"
                  class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg  p-2 bg-gray-100">
                  {{ h }}
                </div>
              </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
  </template>
  <script>
  import axios from 'axios'
  export default {
    data() {
      return {
        today: '',
        day: '',
        local: localStorage.getItem('key'),
        show: false,
        heure: [],
        taken: {
          heure: [],
          client: []
        },
        checked: true,
        heureselected: '',
        dataappointment: [],
        id: '',
        month: '',
        week: '',
        allow: true,
      }
    },
    created() {
      const today = new Date().toISOString().split('T')[0];
      this.today = today;
    },
    mounted() {
      this.heure = ['9h - 10h', '10h - 11h', '11h - 12h', '14h - 15h', '15h - 16h', '16h - 17h', '17h - 18h', '18h - 19h', '19h - 20h']
  
    //   if (localStorage.getItem('reference') == null) {
    //     this.$router.push('/login')
    //   }
      this.affichage()
      // console.log(localStorage.getItem('reference'));
  
      axios.post('http://127.0.0.1:8000/api/patient/getClient'
        , JSON.stringify({
          'email': localStorage.getItem('email'),
  
        }), {
        headers: {
          'Content-Type': 'application/json'
        }
      })
  
  
        // , [localStorage.getItem('key')])
  
        .then(response => {
          console.log(response.data.patientId);
          this.id = response.data.patientId
        })
    },
    methods: {
  
  
  
      affichage() {
        this.taken.heure = []
        this.taken.client = []
        console.log(localStorage.getItem("email"));
        axios.get('http://localhost/MonSalonOnline-backend/api/allRdv')
          .then(response => {
            //console.log(response.data.appointments);
            this.dataappointment = response.data.appointments.filter((appointement) => appointement.date == this.month);
            for (let i = 0; i < this.dataappointment.length; i++) {
              console.log("=>", this.dataappointment[i].date, this.month)
              if (this.dataappointment[i].id_client == localStorage.getItem("id")) {
                this.allow = false;
              }
              if (this.dataappointment[i].jour == this.day || this.dataappointment[i].date == this.day) {
                for (let j = 0; j < this.heure.length; j++) {
                  if (this.dataappointment[i].heure == this.heure[j] && this.dataappointment[i].date == this.month) {
                    this.taken.heure.push(this.heure[j])
                    this.taken.client.push(this.dataappointment[i].reference)
                  }
                }
              }
            }
            console.log(this.allow);
          })
      },
  
  
  
  
      now(heureselected) {
        console.log()
        if (this.allow == false)
          return;
        this.allow = false;
        if (this.taken.heure.includes(heureselected)) {
          return
        } else {
          axios.post('http://localhost/MonSalonOnline-backend/api/addRdv'
            , JSON.stringify({
              'id_client': localStorage.getItem("id"),
              'heure': heureselected,
              'jour': this.day,
              'date': this.month,
              'statut': 'en cours'
  
            }), {
            headers: {
              'Content-Type': 'application/json'
            }
          })
            .then(response => {
              console.log(response)
              this.affichage()
              this.heureselected = ''
              alert('votre rendez-vous est bien pris Merci !!')
  
            })
        }
      },
  
  
  
    },
  
    watch: {
      day: function () {
        this.affichage()
        this.show = true;
        if (this.day == 'Monday' || this.day == 'Tuesday' || this.day == 'Wednesday' || this.day == 'Thursday' || this.day == 'Friday') {
          this.heure = ['08h00', '08h30', '09h00', '09h30', '10h00', '10h30', '11h00', '11h30', '12h00', '12h30', '13h00', '13h30', '14h00', '14h30', '15h00', '15h30', '16h00', '16h30', '17h00', '17h30', '18h00']
        } 
        else if (this.day == 'Saturday' || this.day == 'Sunday') {
          this.heure = []
        } 
        this.affichage()
      },
      month: function () {
        this.allow = true;
        this.affichage()
        let input = new Date(this.month);
        let dayName = input.toLocaleString("default", { weekday: "long" });
        this.day = dayName
        this.affichage()
      }
    }
  }
  </script>
  <style></style>