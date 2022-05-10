<template>
    <div>
      <!-- <input class="form-control form-control-navbar" @keyup="search" v-model="search" type="search" placeholder="Search" aria-label="Search"> -->
      <input type = "text"  v-model="name" @input="search">
      <h2>HOLAA</h2>    
    </div>
</template>

<script>
    export default {
        data: function(){
            return{
                name:''
            }
        },
        methods: {
            search(){
                axios.get('/search/'+this.name)
                .then(response=>{
                    
                })
                .catch(errors=>{
                    if(erros.response.status == 401){
                        window.location = '/login';
                    }
                });
            }
        }
    }
</script>
