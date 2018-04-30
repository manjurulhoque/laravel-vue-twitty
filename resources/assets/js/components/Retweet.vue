<template>
    <div class="retweet-popup" role="dialog">
        <div class="wrap5">
            <div class="retweet-popup-body-wrap">
                <div class="retweet-popup-heading">
                    <h3>Retweet this to followers?</h3>
                    <span>
                        <button class="close-retweet-popup" @click="onClose()">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </span>
                </div>
                <div class="retweet-popup-input">
                    <div class="retweet-popup-input-inner">
                        <input type="text" name="retweet" v-model="retweet" class="retweetMsg" placeholder="Add a comment.."/>
                    </div>
                </div>
                <div class="retweet-popup-inner-body">
                    <div class="retweet-popup-inner-body-inner">
                        <div class="retweet-popup-comment-wrap">
                            <div class="retweet-popup-comment-head">
                                <img :src="tweet.user.profile_image"/>
                            </div>
                            <div class="retweet-popup-comment-right-wrap">
                                <div class="retweet-popup-comment-headline">
                                    <a>{{ tweet.user.screen_name }} </a>
                                    <span>{{ tweet.user.user_name }} - {{ tweet.created_at }}</span>
                                </div>
                                <div class="retweet-popup-comment-body">
                                    {{ tweet.tweet }}   - TWEET-IMAGE-LINK
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="retweet-popup-footer">
                    <div class="retweet-popup-footer-right">
                        <button class="retweet-it" type="submit">
                            <i class="fa fa-retweet" aria-hidden="true"></i>Retweet
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['tweet'],
        data() {
            return {
                retweet: ''
            }
        },
        mounted() {

        },
        methods: {
            onClose() {
                this.$parent.showModal = false;
            }
        }
    }
</script>