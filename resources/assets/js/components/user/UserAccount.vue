<template>
    <form method="POST" v-on:submit.prevent="onSubmit()">
        <div class="acc-wrap">
            <div class="acc-left">
                USERNAME
            </div>
            <div class="acc-right">
                <input type="text" name="username" v-model="username"/>
                <span>
                    <!-- Username Error -->
                </span>
            </div>
        </div>

        <div class="acc-wrap">
            <div class="acc-left">
                Email
            </div>
            <div class="acc-right">
                <input type="text" name="email" v-model="email"/>
                <span>
                    <!-- Email Error -->
                </span>
            </div>
        </div>
        <div class="acc-wrap">
            <div class="acc-left">
            </div>
            <div class="acc-right">
                <input type="Submit" name="submit" value="Save changes"/>
            </div>
            <div class="settings-error">
                <!-- Fields Error -->
            </div>
        </div>
    </form>
</template>

<script>
    export default{
        props: ['user'],
        data() {
            return {
                username: this.user.username,
                email: this.user.email
            }
        },
        methods: {
            onSubmit(){
                axios.post(this.$url + 'settings/account', {
                    username: this.username,
                    email: this.email
                })
                    .then(res => {
                        console.log(res);
                        this.username = res.username;
                        this.email = res.email;
                    }).catch(err => console.log(err))
            }
        }
    }
</script>