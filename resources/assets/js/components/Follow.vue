<template>
    <span>
        <button @click="follow()" :class="following ? 'following-btn' : 'follow-btn'" class="f-btn"
                data-follow="user_id" data-user="user_id">
            <i class="fa fa-user-plus"></i> Follow
        </button>
    </span>
</template>

<script>
    export default {
        props: ['id', 'another'],
        data() {
            return {
                following: false
            }
        },
        mounted() {
            this.checkFollowing();
        },
        methods: {
            checkFollowing(){
                axios.get(this.$url + `check-follow/${this.another}`)
                    .then(res => {
                        if (res.data) {
                            this.following = true;
                        }
                        else {
                            this.following = false;
                        }
                    })
                    .catch(err => {
                        console.log(err);
                    })
            },
            follow() {
                if (!this.following) {
                    console.log('following');
                    axios.post(this.$url + `follow/${this.another}`)
                        .then(res => {
                            this.following = true;
                        })
                        .catch(err => {
                            console.log(err);
                        })
                }
                else {
                    console.log('unfollowing');
                    axios.post(this.$url + `unfollow/${this.another}`)
                        .then(res => {
                            this.following = false;
                        })
                        .catch(err => {
                            console.log(err);
                        })
                }
            }
        }
    }
</script>
