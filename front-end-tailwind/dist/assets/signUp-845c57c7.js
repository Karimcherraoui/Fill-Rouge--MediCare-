import{a as n}from"./axios-707ed124.js";import{_ as i,o as u,c as g,b as e,w as c,e as l,v as s,F as b}from"./index-ef09a026.js";import{_ as p}from"./previous-88455c2f.js";const y={data(){return{name:"",email:"",password:"",gender:"",date_of_birth:"",phone:"",address:"",assurance:"",error:!1}},methods:{goBack(){this.$router.go(-1)},signup(){this.name===""||this.email===""||this.password===""||this.gender===""||this.date_of_birth===""||this.phone===""?this.error=!0:n.post("http://127.0.0.1:8000/api/patient/store",JSON.stringify({name:this.name,email:this.email,password:this.password,gender:this.gender,date_of_birth:this.date_of_birth,phone:this.phone,address:this.address,assurance:this.assurance}),{headers:{"Content-Type":"application/json"}}).then(a=>{a.data.message==="client created"&&this.$router.push("/login")}).catch(a=>{console.log(a)})}}},f=e("img",{src:p,class:"w-8 h-8",alt:""},null,-1),h=e("h4",{class:"font-bold text-xl text-center mt-1"},"back",-1),m=[f,h],x={class:"bg-white dark:bg-gray-900 w-3/4 rounded-lg shadow-lg mt-5 mb-20 mx-auto"},k={class:"flex justify-center min-h-screen"},w=e("div",{class:"hidden bg-cover lg:block lg:w-2/5",style:{"background-image":"url('https://imgs.search.brave.com/dgefiQWskK93QHJp0sJ4IEE0WQifwzVU33rynvkSioA/rs:fit:1000:796:1/g:ce/aHR0cHM6Ly9pbWFn/ZXMud2lzZWdlZWsu/Y29tL3dvbWFuLWlu/LXNjcnVicy13b3Jr/aW5nLWF0LWNvbXB1/dGVyLW5lYXItY291/bnRlci1hbmQtbWFu/LmpwZw')"}},null,-1),_={class:"flex items-center w-full max-w-3xl p-8 mx-auto tex"},v={class:"w-full"},X=e("h1",{class:"text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white"}," Register A new account. ",-1),V=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Name",-1),W=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Email",-1),U=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Password",-1),L=e("div",null,[e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"}," Confirm Password"),e("input",{type:"Password",placeholder:"Confirmation Password",class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"})],-1),B=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Gender",-1),P=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Phone number",-1),F=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Date of birth",-1),M=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"address",-1),j=e("label",{class:"block mb-2 text-sm text-gray-600 dark:text-gray-200"},"Assurance",-1),z=e("div",null,null,-1),C=e("button",{class:"flex items-center justify-between w-full px-4 py-4 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-green-500 rounded-lg hover:bg-green-400 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-50"},[e("span",null,"Register"),e("svg",{xmlns:"http://www.w3.org/2000/svg",class:"w-5 h-5 rtl:-scale-x-100",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z","clip-rule":"evenodd"})])],-1);function E(a,r,J,N,t,d){return u(),g(b,null,[e("button",{onClick:r[0]||(r[0]=(...o)=>d.goBack&&d.goBack(...o)),class:"flex flex-cols gap-3 justify-center mt-12 ml-10"},m),e("section",x,[e("div",k,[w,e("div",_,[e("div",v,[X,e("form",{class:"grid grid-cols-1 gap-6 mt-8 md:grid-cols-2",onSubmit:r[9]||(r[9]=c((...o)=>d.signup&&d.signup(...o),["prevent"]))},[e("div",null,[V,l(e("input",{type:"text",placeholder:"John","onUpdate:modelValue":r[1]||(r[1]=o=>t.name=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.name]])]),e("div",null,[W,l(e("input",{type:"email",placeholder:"Exemple@exemple.com","onUpdate:modelValue":r[2]||(r[2]=o=>t.email=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.email]])]),e("div",null,[U,l(e("input",{type:"Password",placeholder:"Password","onUpdate:modelValue":r[3]||(r[3]=o=>t.password=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.password]])]),L,e("div",null,[B,l(e("input",{type:"text",placeholder:"Snow","onUpdate:modelValue":r[4]||(r[4]=o=>t.gender=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.gender]])]),e("div",null,[P,l(e("input",{type:"text",placeholder:"XXX-XX-XXXX-XXX","onUpdate:modelValue":r[5]||(r[5]=o=>t.phone=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.phone]])]),e("div",null,[F,l(e("input",{type:"text",placeholder:"Y-M-D","onUpdate:modelValue":r[6]||(r[6]=o=>t.date_of_birth=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.date_of_birth]])]),e("div",null,[M,l(e("input",{type:"text",placeholder:"address","onUpdate:modelValue":r[7]||(r[7]=o=>t.address=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.address]])]),e("div",null,[j,l(e("input",{type:"string",placeholder:"Assurance","onUpdate:modelValue":r[8]||(r[8]=o=>t.assurance=o),class:"block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"},null,512),[[s,t.assurance]])]),z,C],32)])])])])],64)}const S=i(y,[["render",E]]);export{S as default};
