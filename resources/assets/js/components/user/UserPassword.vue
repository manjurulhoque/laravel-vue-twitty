<template>
    <div class="righter">
        <div class="inner-righter">
            <div class="acc">
                <div class="acc-heading">
                    <h2>Password</h2>
                    <h3>Change your password or recover your current one.</h3>
                </div>
                <form method="POST" v-on:submit.prevent="onSubmit()">
                    <div class="acc-content">
                        <div class="acc-wrap">
                            <div class="acc-left">
                                Current password
                            </div>
                            <div class="acc-right">
                                <input type="password" name="currentPwd" v-model="currentPassword"/>
                                <span>
								<!-- Current Pwd Error -->
							    </span>
                            </div>
                        </div>

                        <div class="acc-wrap">
                            <div class="acc-left">
                                New password
                            </div>
                            <div class="acc-right">
                                <input type="password" name="newPassword" v-model="newPassword"/>
                                <span>
								<!-- NewPassword Error -->
							    </span>
                            </div>
                        </div>

                        <div class="acc-wrap">
                            <div class="acc-left">
                                Verify password
                            </div>
                            <div class="acc-right">
                                <input type="password" name="rePassword" v-model="verifyPassword"/>
                                <span>
								<!-- RePassword Error -->
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
                    </div>
                </form>
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
    export default {
        props: ['user'],
        data() {
            return {
                currentPassword: '',
                newPassword: '',
                verifyPassword: ''
            }
        },
        methods: {
            onSubmit() {
                axios.post(this.$url + `settings/password`, {
                    currentPassword: this.currentPassword,
                    newPassword: this.newPassword,
                    verifyPassword: this.verifyPassword
                }).then(res => {
                    console.log(res);
                }).catch(err => console.log(err))
            }
        }
    }
</script>