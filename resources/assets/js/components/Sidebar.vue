<template>
    <!---Inner wrapper-->
    <div class="inner-wrapper">
        <div class="in-wrapper">
            <div class="in-full-wrap">
                <div class="in-left">
                    <div class="in-left-wrap">
                        <div class="info-box">
                            <div class="info-inner">
                                <div class="info-in-head">
                                    <!-- PROFILE-COVER-IMAGE -->
                                    <img :src="user.profile_cover"/>
                                </div><!-- info in head end -->
                                <div class="info-in-body">
                                    <div class="in-b-box">
                                        <div class="in-b-img">
                                            <!-- PROFILE-IMAGE -->
                                            <img :src="user.profile_image"/>
                                        </div>
                                    </div><!--  in b box end-->
                                    <div class="info-body-name">
                                        <div class="in-b-name">
                                            <div>
                                                <a href="PROFILE-LINK">{{ user.screen_name }}</a>
                                            </div>
                                            <span>
                                                <small>
                                                    <a href="PROFILE-LINK">@{{user.username}}</a>
                                                </small>
                                            </span>
                                        </div><!-- in b name end-->
                                    </div><!-- info body name end-->
                                </div><!-- info in body end-->
                                <div class="info-in-footer">
                                    <div class="number-wrapper">
                                        <div class="num-box">
                                            <div class="num-head">
                                                TWEETS
                                            </div>
                                            <div class="num-body">
                                                {{ total_tweets }}
                                            </div>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-head">
                                                FOLLOWING
                                            </div>
                                            <div class="num-body">
                                                <span class="count-following">{{ user.following }}</span>
                                            </div>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-head">
                                                FOLLOWERS
                                            </div>
                                            <div class="num-body">
                                                <span class="count-followers">{{ user.followers }}</span>
                                            </div>
                                        </div>
                                    </div><!-- mumber wrapper-->
                                </div><!-- info in footer -->
                            </div><!-- info inner end -->
                        </div><!-- info box end-->

                        <!--==TRENDS==-->
                        <!---TRENDS HERE-->
                        <!--==TRENDS==-->

                    </div><!-- in left wrap-->
                </div><!-- in left end-->
                <div class="in-center">
                    <div class="in-center-wrap">
                        <!--TWEET WRAPPER-->
                        <create-tweet :profileImage="user.profile_image"></create-tweet>
                        <!--TWEET WRAP END-->

                        <!--Tweet SHOW WRAPPER-->
                        <div class="tweets">
                            <all-tweets></all-tweets>
                        </div>
                        <!--TWEETS SHOW WRAPPER-->

                        <div class="loading-div">
                            <img id="loader" src="assets/images/loading.svg" style="display: none;"/>
                        </div>
                        <div class="popupTweet"></div>
                        <!--Tweet END WRAPER-->

                    </div><!-- in left wrap-->
                </div><!-- in center end -->

                <div class="in-right">
                    <div class="in-right-wrap">

                        <!--Who To Follow-->
                        <div class="follow-wrap">
                            <div class="follow-inner">
                                <div class="follow-title"><h3>Who to follow</h3></div>

                                <div class="follow-body">
                                    <div class="follow-img">
                                        <img src="PROFILE-IMAGE"/>
                                    </div>
                                    <div class="follow-content">
                                        <div class="fo-co-head">
                                            <a href="PROFILE-LINK">ScreenName</a><span>@USERNAME</span>
                                        </div>
                                        <!-- FOLLOW BUTTON -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Who To Follow-->

                    </div><!-- in left wrap-->

                </div><!-- in right end -->

            </div><!--in full wrap end-->

        </div><!-- in wrappper ends-->
    </div><!-- inner wrapper ends-->
</template>

<script>
    import CreateTweet from './CreateTweet.vue';
    import Tweets from './Tweets.vue';
    export default {
        props: ['user', 'total_tweets'],
        data() {
            return {}
        },
        components: {
            CreateTweet,
            allTweets: Tweets
        },
        mounted() {
            console.log(this.total_tweets);
        }
    }
</script>
