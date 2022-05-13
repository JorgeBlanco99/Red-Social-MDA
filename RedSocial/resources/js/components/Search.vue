<template>
    <div>
        <input type = "text"  v-model="name" @input="search">
        <div class="panel-footer" v-if="users" style="position:absolute;
        z-index:1000; border:1px solid #333; background:#fff; font-size:125%; width: 20%;">
            <div v-for="(index,n) in users.data" :key="index">
                <b><a :href="'/profile/'+ users.data[n].id" style="text-decoration:none; ">{{users.data[n].name}}</a></b>
            </div>
        </div>
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
                axios.get('/findUser?q='+this.name)
                .then((data)=> {
                    this.users=data.data

                })
                .catch(errors=>{
                    if(errors.response.status == 401){
                        window.location = '/login';
                    }
                });
            },
            redirect(id){
                window.location.href = '/profile/'+id;
            }

        }    
    }
</script>
