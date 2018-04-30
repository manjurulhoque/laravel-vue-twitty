<template>
    <div class="follow-unfollow-box">
        <div class="follow-unfollow-inner">
            <div class="follow-background">
                <img :src="getPic(follower.profile_cover)"/>
            </div>
            <div class="follow-person-button-img">
                <div class="follow-person-img">
                    <img :src="getPic(follower.profile_image)"/>
                </div>
                <div class="follow-person-button">
                    <!-- FOLLOW BUTTON -->
                </div>
            </div>
            <div class="follow-person-bio">
                <div class="follow-person-name">
                    <a href="PROFILE-LINK">{{ follower.screen_name }}</a>
                </div>
                <div class="follow-person-tname">
                    <a href="PROFILE-LINK">{{ follower.username }}</a>
                </div>
                <div class="follow-person-dis">
                    {{ follower.bio }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['follower'],
        mounted() {},
        methods: {
            getPic(src) {
                return '../../' + src;
            }
        }
    }
</script>