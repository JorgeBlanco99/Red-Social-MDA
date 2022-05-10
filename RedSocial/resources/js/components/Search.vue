<template>
    <div>
        <input type = "text"  v-model="name" @input="search">
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
                axios.get('/search/finduser?q'+this.name)
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
