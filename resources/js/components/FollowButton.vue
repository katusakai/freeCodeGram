<template>
   <div>
      <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
   </div>
</template>

<script>
    export default {
       props: ['userId', 'follows', 'routeLogin', 'routeFollow'],

        mounted() {
            console.log('Component mounted.')
        },

       data: function () {
          return {
             status: this.follows,
          }
       },

       methods: {
           followUser() {
              axios.post(this.routeFollow)
                      .then(response => {
                         this.status = ! this.status;
                      })
                      .catch(errors => {
                         if (errors.response.status == 401) {
                            window.location = this.routeLogin;
                         }
                      });
           }
       },

       computed: {
          buttonText() {
             return this.status ? 'Unfollow' : 'Follow';
          }
       }
    }
</script>
