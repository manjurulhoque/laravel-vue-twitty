<template>
    <div class="tweet-wrap">
        <div class="tweet-inner">
            <div class="tweet-h-left">
                <div class="tweet-h-img">
                    <!-- PROFILE-IMAGE -->
                    <img :src="profileImage"/>
                </div>
            </div>
            <div class="tweet-body">
                <textarea
                        :disabled="limitedClass"
                        class="status"
                        name="tweet"
                        v-model="tweet"
                        placeholder="Type Something here!"
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
                    <span id="count">{{ charactersLeft }}</span>
                    <input type="button" name="tweet" value="tweet" @click="onSubmit()"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//    const url = 'http://localhost:8000/';
    import axios from 'axios';
    export default {
        props: ['profileImage'],
        data() {
            return {
                tweet: ''
            }
        },
        mounted() {

        },
        computed: {
            charactersLeft(){
                return (140 - this.tweet.length);
            },
            limitedClass(){
                let char = this.tweet.length;

                if (char.length === 140) {
                    return true;
                }

//                return (140 - char);
            }
        },
        methods: {
            onSubmit() {
                // here $url is global instance is defined in app.js
                axios.post(this.$url + 'store-tweet', {
                    tweet: this.tweet
                }).then(res => {
                    console.log(res);
                    this.tweet = '';
                }).catch(err => console.log(err))
            }
        }
    }
</script>
