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
                                                10
                                            </div>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-head">
                                                FOLLOWING
                                            </div>
                                            <div class="num-body">
                                                <span class="count-following">10</span>
                                            </div>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-head">
                                                FOLLOWERS
                                            </div>
                                            <div class="num-body">
                                                <span class="count-followers">10</span>
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
                        <div class="tweet-wrap">
                            <div class="tweet-inner">
                                <div class="tweet-h-left">
                                    <div class="tweet-h-img">
                                        <!-- PROFILE-IMAGE -->
                                        <img :src="user.profile_image"/>
                                    </div>
                                </div>
                                <div class="tweet-body">
                                    <textarea class="status" name="status" placeholder="Type Something here!"
                                              rows="4" cols="50"></textarea>
                                    <!--<div class="hash-box">-->
                                    <!--<ul>-->
                                    <!--</ul>-->
                                    <!--</div>-->

                                </div>
                                <div class="tweet-footer">
                                    <div class="t-fo-left">
                                        <ul>
                                            <input type="file" name="file" id="file"/>
                                            <li style="list-style-type: none;">
                                                <label for="file">
                                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                                </label>
                                                <span class="tweet-error"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="t-fo-right">
                                        <span id="count">140</span>
                                        <input type="submit" name="tweet" value="tweet"/>
                                    </div>
                                </div>
                            </div>
                        </div><!--TWEET WRAP END-->


                        <!--Tweet SHOW WRAPPER-->
                        <div class="tweets">
                            <!--TWEETS HERE-->
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
    export default {
        props: ['user'],
        data() {
            return {}
        },
        mounted() {
            console.log(this.user)
        }
    }
</script>
