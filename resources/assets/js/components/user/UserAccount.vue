<template>
    <div class="righter">
        <div class="inner-righter">
            <div class="acc">
                <div class="acc-heading">
                    <h2>Account</h2>
                    <h3>Change your basic account settings.</h3>
                </div>
                <div class="acc-content">
                    <form method="POST" v-on:submit.prevent="onSubmit()">
                        <div class="acc-wrap">
                            <div class="acc-left">
                                USERNAME
                            </div>
                            <div class="acc-right">
                                <input type="text" name="username" v-model="username"/>
                                <span v-if="userAvailable">
                                    <!-- Username Error -->
                                    {{ userAvailable }}
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
                </div>
            </div>
            <div class="content-setting">
                <div class="content-heading">

                </div>
                <div class="content-content">
                    <div class="content-left">

                    </div>
                    <div class="content-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        props: ['user'],
        data() {
            return {
                username: this.user.username,
                email: this.user.email,
                userAvailable: ''
            }
        },
        watch: {
            username(value) {
                axios.get(this.$url + `check/${this.username}`)
                    .then(res => {
                        if (res.data.status === 0) {
                            this.userAvailable = 'User available';
                        } else {
                            this.userAvailable = 'User is not available';
                        }
                    })
                    .catch(err => {
                        console.log(err);
                    })
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