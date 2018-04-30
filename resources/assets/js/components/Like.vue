<template>
    <div class="t-s-f-right">
        <ul>
            <li>
                <button>
                    <a href="#">
                        <i class="fa fa-share" aria-hidden="true"></i>
                    </a>
                </button>
            </li>
            <li>
                <button class="retweet" @click.prevent="showModal()">
                    <a href="#">
                        <i class="fa fa-retweet" aria-hidden="true"></i>
                    </a>
                </button>
            </li>
            <li>
                <button :class="liked ? 'unlike-btn' : 'like-btn'" @click.prevent="like()">
                    <a href="#">
                        <i class="fa" :class="liked ? 'fa-heart' : 'fa-heart-o' " aria-hidden="true">
                            <span class="likesCounter" v-if="total">{{ total }}</span>
                        </i>
                    </a>
                </button>
            </li>
            <li>
                <a href="#" class="more">
                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                </a>
                <ul>
                    <li><label class="deleteTweet">Delete Tweet</label></li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['id', 'tweet_id'],
        data() {
            return {
                liked: false,
                total: ''
            }
        },
        components: {

        },
        mounted() {
            this.checkingLike();
        },
        methods: {
            showModal() {
                this.$parent.showPopup();
            },
            like() {
                if (!this.liked) {
                    axios.post(this.$url + `like/${this.tweet_id}`)
                        .then(res => {
                            this.liked = true;
                            this.total = res.data.total;
                        })
                        .catch(error => {
                            console.log(error)
                        });
                }
                else {
                    axios.post(this.$url + `unlike/${this.tweet_id}`)
                        .then(res => {
                            this.liked = false;
                            this.total = res.data.total;
                        })
                        .catch(error => {
                            console.log(error)
                        });
                }
            },
            checkingLike() {
                let vm = this;
                // here $url is global instance is defined in app.js
                axios.get(this.$url + `check-like/${this.id}`)
                    .then(res => {
                        vm.liked = res.data.result;
                        this.total = res.data.total;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        }
    }
</script>