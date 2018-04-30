<template>
    <div class="follow-unfollow-box">
        <div class="follow-unfollow-inner">
            <div class="follow-background">
                <img :src="getPic(following.profile_cover)"/>
            </div>
            <div class="follow-person-button-img">
                <div class="follow-person-img">
                    <img :src="getPic(following.profile_image)"/>
                </div>
                <div class="follow-person-button">
                    <!-- FOLLOW BUTTON -->
                </div>
            </div>
            <div class="follow-person-bio">
                <div class="follow-person-name">
                    <a href="PROFILE-LINK">{{ following.screen_name }}</a>
                </div>
                <div class="follow-person-tname">
                    <a href="PROFILE-LINK">{{ following.username }}</a>
                </div>
                <div class="follow-person-dis">
                    {{ following.bio }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: ['following'],
        mounted() {},
        methods: {
            getPic(src) {
                return '../../' + src;
            }
        }
    }

</script>