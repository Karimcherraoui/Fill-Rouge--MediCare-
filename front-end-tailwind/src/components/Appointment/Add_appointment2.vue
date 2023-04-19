<template>
   <div>
            <input type="date" v-model="appointmentDate">
            <input type="time" v-model="appointmentTime">
            <select v-model="doctorId">
                <option value="1">Doctor 1</option>
                <option value="2">Doctor 2</option>
                <option value="3">Doctor 3</option>
            </select>
            <select v-model="patientId">
                <option value="1">Patient 1</option>
                <option value="2">Patient 2</option>
                <option value="3">Patient 3</option>
            </select>
            <button @click="createAppointment">Create Appointment</button>
        </div>
</template>

<script>
export default {

}
</script>

<style>

</style>


<!-- Vue.component('appointment-picker', {
    data: function () {
        return {
            appointmentDate: '',
            appointmentTime: '',
            doctorId: '',
            patientId: ''
        }
    },
    methods: {
        createAppointment: function () {
            var self = this;
            axios.post('/appointments', {
                appointment_date: self.appointmentDate + ' ' + self.appointmentTime,
                doctor_id: self.doctorId,
                patient_id: self.patientId
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    },
    template: `
        <div>
            <input type="date" v-model="appointmentDate">
            <input type="time" v-model="appointmentTime">
            <select v-model="doctorId">
                <option value="1">Doctor 1</option>
                <option value="2">Doctor 2</option>
                <option value="3">Doctor 3</option>
            </select>
            <select v-model="patientId">
                <option value="1">Patient 1</option>
                <option value="2">Patient 2</option>
                <option value="3">Patient 3</option>
            </select>
            <button @click="createAppointment">Create Appointment</button>
        </div>
    `
}); -->