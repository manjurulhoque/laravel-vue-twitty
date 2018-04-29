<template>
    <div>
        <div class="all-tweet" v-for="(tweet, index) in tweets">
            <div class="t-show-wrap">
                <div class="t-show-inner">
                    <!-- this div is for retweet icon
                    <div class="t-show-banner">
                        <div class="t-show-banner-inner">
                            <span><i class="fa fa-retweet" aria-hidden="true"></i></span><span>Screen-Name Retweeted</span>
                        </div>
                    </div>
                    -->
                    <div class="t-show-popup">
                        <div class="t-show-head">
                            <div class="t-show-img">
                                <img :src="tweet.user.profile_image"/>
                            </div>
                            <div class="t-s-head-content">
                                <div class="t-h-c-name">
                                    <span>
                                        <!--PROFILE-LINK-->
                                        <a href="#">{{ tweet.user.screen_name }}</a>
                                    </span>
                                    <span>@{{ tweet.user.username }}</span>
                                    <span>{{ tweet.created_at }}</span>
                                </div>
                                <div class="t-h-c-dis">
                                    {{ tweet.tweet }}
                                </div>
                            </div>
                        </div>
                        <!--tweet show head end-->

                        <div class="t-show-body" v-if="tweet.image">
                            <div class="t-s-b-inner">
                                <div class="t-s-b-inner-in">
                                    <!--TWEET-IMAGE-->
                                    <img src="" class="imagePopup"/>
                                </div>
                            </div>
                        </div>
                        <!--tweet show body end-->
                    </div>
                    <div class="t-show-footer">
                        <!--like vue-->
                        <like :id="tweet.id" :tweet_id="tweet.id"></like>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//    const url = 'http://localhost:8000/';
    import axios from 'axios';
    import Like from './Like.vue';
    export default {
        data() {
            return {
                tweets: {},
                result: ''
            }
        },
        components: {
            Like
        },
        mounted() {
            //console.log(this.tweets);
        },
        created() {
            this.fetchAll();
        },
        computed: {},
        methods: {
            checkingLike(id){
                //let result = ''

                return vm.result;
            },
            fetchAll() {
                // here $url is global instance is defined in app.js
                axios.get(this.$url + 'tweets')
                    .then(res => {
                        this.tweets = res.data;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        }
    }
</script>