<template>
    <div>
        <div class="follow-title"><h3>Who to follow</h3></div>
        <div class="follow-wrap" v-for="(user, index) in users">
            <div class="follow-inner">

                <div class="follow-body">
                    <div class="follow-img">
                        <img :src="getPic(user.profile_image)"/>
                    </div>
                    <div class="follow-content">
                        <div class="fo-co-head">
                            <a href="PROFILE-LINK">{{ user.screen_name }}</a><span> @{{ user.username }}</span>
                        </div>
                        <!-- FOLLOW BUTTON -->
                        <div class="edit-button">
                            <follow :id="1" :another="1"></follow>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import Follow from './Follow.vue';
    export default {
        data() {
            return {
                users: {}
            }
        },
        components: {
            Follow
        },
        mounted() {
            this.whoToFollow();
        },
        methods: {
            whoToFollow() {
                axios.get(this.$url + 'who-to-follow')
                    .then(res => {
                        console.log(res);
                        this.users = res.data;
                    })
                    .catch(err => {
                        console.log(err);
                    })
            },
            getPic(src){
                return '../../' + src;
            }
        }
    }
</script>