import{a as r}from"./axios-707ed124.js";import{_ as u,o as s,c as i,b as o,e as p,v as m,F as g,i as f,k as y,t as d}from"./index-ef09a026.js";const k={data(){return{today:"",day:"",local:localStorage.getItem("key"),show:!1,heure:[],taken:{heure:[],client:[]},checked:!0,heureselected:"",dataappointment:[],id:"",month:"",week:"",allow:!0}},created(){const a=new Date().toISOString().split("T")[0];this.today=a},mounted(){this.heure=["9h - 10h","10h - 11h","11h - 12h","14h - 15h","15h - 16h","16h - 17h","17h - 18h","18h - 19h","19h - 20h"],this.affichage(),r.post("http://localhost/MonSalonOnline-backend/api/getClient",JSON.stringify({refernece:localStorage.getItem("reference")}),{headers:{"Content-Type":"application/json"}}).then(a=>{this.id=a.data.id})},methods:{affichage(){this.taken.heure=[],this.taken.client=[],console.log(localStorage.getItem("id")),r.get("http://localhost/MonSalonOnline-backend/api/allRdv").then(a=>{this.dataappointment=a.data.appointments.filter(e=>e.date==this.month);for(let e=0;e<this.dataappointment.length;e++)if(console.log("=>",this.dataappointment[e].date,this.month),this.dataappointment[e].id_client==localStorage.getItem("id")&&(this.allow=!1),this.dataappointment[e].jour==this.day||this.dataappointment[e].date==this.day)for(let h=0;h<this.heure.length;h++)this.dataappointment[e].heure==this.heure[h]&&this.dataappointment[e].date==this.month&&(this.taken.heure.push(this.heure[h]),this.taken.client.push(this.dataappointment[e].reference));console.log(this.allow)})},now(a){console.log(),this.allow!=!1&&(this.allow=!1,!this.taken.heure.includes(a)&&r.post("http://localhost/MonSalonOnline-backend/api/addRdv",JSON.stringify({id_client:localStorage.getItem("id"),heure:a,jour:this.day,date:this.month,statut:"en cours"}),{headers:{"Content-Type":"application/json"}}).then(e=>{console.log(e),this.affichage(),this.heureselected="",alert("votre rendez-vous est bien pris Merci !!")}))}},watch:{day:function(){this.affichage(),this.show=!0,this.day=="Monday"||this.day=="Tuesday"||this.day=="Wednesday"||this.day=="Thursday"||this.day=="Saturday"?this.heure=["08h00","08h30","09h00","09h30","10h00","10h30","11h00","11h30","12h00","12h30","13h00","13h30","14h00","14h30","15h00","15h30","16h00","16h30","17h00","17h30","18h00"]:(this.day=="Friday"||this.day=="Sunday")&&(this.heure=[]),this.affichage()},month:function(){this.allow=!0,this.affichage();let e=new Date(this.month).toLocaleString("default",{weekday:"long"});this.day=e,this.affichage()}}},_={class:"mainpage bg-gray-200 w-4/6 mx-auto max-w-screen-xl p-4 py-12 rounded-xl sm:px-6 lg:px-8 my-20"},x={class:"mx-auto max-w-lg rounded-lg"},b=o("h1",{class:"text-center text-2xl font-bold text-green-700 sm:text-3xl"}," To choose your date appointment ",-1),w={class:"mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl"},v=o("label",{for:"day",class:"block mb-2 text-sm font-medium text-green-800 dark:text-white"},"Select Day",-1),S={class:"relative mt-1"},C=["min"],O={key:0},T=o("label",{for:"heure",class:"text-sm font-medium"},"heure",-1),I={class:"grid grid-cols-3 gap-2"},M={key:0},j=["onClick"],D=["onClick"],N=["onClick"];function B(a,e,h,F,n,l){return s(),i("div",_,[o("div",x,[b,o("div",w,[o("div",null,[v,o("div",S,[o("div",null,[p(o("input",{min:n.today,class:"bg-green-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500","onUpdate:modelValue":e[0]||(e[0]=t=>n.month=t),type:"date"},null,8,C),[[m,n.month]])])])]),n.show?(s(),i("div",O,[T,o("div",I,[(s(!0),i(g,null,f(n.heure,t=>(s(),i("div",{class:"relative mt-1",key:t},[n.taken.heure.includes(t)?(s(),i("div",M,[n.taken.client[n.taken.heure.indexOf(t)]===n.local?(s(),i("div",{key:0,onClick:c=>l.now(t),class:"taken transform hover:scale-105 transition duration-300 shadow-xl rounded-lg p-4 bg-blue-200 taken-by-current-client"},d(t),9,j)):(s(),i("div",{key:1,onClick:c=>l.now(t),class:"taken transform hover:scale-105 transition duration-300 shadow-xl rounded-lg p-4 bg-red-200 taken-by-other-client"},d(t),9,D))])):(s(),i("div",{key:1,onClick:c=>l.now(t),class:"transform hover:scale-105 transition duration-300 shadow-xl rounded-lg p-2 bg-gray-100"},d(t),9,N))]))),128))])])):y("",!0)])])])}const J=u(k,[["render",B]]);export{J as default};