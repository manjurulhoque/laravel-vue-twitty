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
                                <img src="PROFILE-IMAGE"/>
                            </div>
                            <div class="t-s-head-content">
                                <div class="t-h-c-name">
                                    <span>
                                        <a href="PROFILE-LINK">{{ tweet.user.screen_name }}</a>
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
                                    <img src="TWEET-IMAGE" class="imagePopup"/>
                                </div>
                            </div>
                        </div>
                        <!--tweet show body end-->
                    </div>
                    <div class="t-show-footer">
                        <div class="t-s-f-right">
                            <ul>
                                <li>
                                    <button><a href="#"><i class="fa fa-share" aria-hidden="true"></i></a></button>
                                </li>
                                <li>
                                    <button><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></button>
                                </li>
                                <li>
                                    <button><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></button>
                                </li>
                                <li>
                                    <a href="#" class="more"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><label class="deleteTweet">Delete Tweet</label></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const url = 'http://localhost:8000/';
    import axios from 'axios';
    export default {
        data() {
            return {
                tweets: {}
            }
        },
        mounted() {

        },
        created() {
            this.fetchAll();
        },
        methods: {
            test(){
                console.log('testing');
            },
            fetchAll() {
                axios.get(url + 'tweets')
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