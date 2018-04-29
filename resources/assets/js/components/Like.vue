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
                <button>
                    <a href="#">
                        <i class="fa fa-retweet" aria-hidden="true"></i>
                    </a>
                </button>
            </li>
            <li>
                <button :class="liked ? 'unlike-btn' : 'like-btn'" @click.prevent="like()">
                    <a href="#">
                        <i class="fa" :class="liked ? 'fa-heart' : 'fa-heart-o' " aria-hidden="true"></i>
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
    //    const url = 'http://localhost:8000/';
    export default {
        props: ['id', 'tweet_id'],
        data() {
            return {
                liked: false,
                addLike: false
            }
        },
        mounted() {
            this.checkingLike();
        },
        methods: {
            like() {
                if (!this.liked) {
                    axios.post(this.$url + `like/${this.tweet_id}`)
                        .then(res => {
                            console.log(res);
                            this.liked = true;
                        })
                        .catch(error => {
                            console.log(error)
                        });
                }
                else {
                    axios.post(this.$url + `unlike/${this.tweet_id}`)
                        .then(res => {
                            console.log(res);
                            this.liked = false;
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
                        vm.liked = res.data;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        }
    }
</script>