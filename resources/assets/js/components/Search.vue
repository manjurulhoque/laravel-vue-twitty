<template>
    <form action="" class="navbar-form">
        <div class="form-group">
            <input type="text" v-model="search" placeholder="Search" class="search form-control"/>
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="search-result" v-if="users.length > 0">
                <div class="nav-right-down-wrap">
                    <ul>
                        <li v-for="(user, index) in users">
                            <div class="nav-right-down-inner">
                                <div class="nav-right-down-left">
                                    <a :href="'users/'+user.username">
                                        <img :src="user.profile_image">
                                    </a>
                                </div>
                                <div class="nav-right-down-right">
                                    <div class="nav-right-down-right-headline">
                                        <a :href="'users/'+user.username">
                                            {{ user.screen_name}}
                                        </a>
                                        <span>@ {{ user.username }}</span>
                                    </div>
                                    <div class="nav-right-down-right-body">

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                search: '',
                users: {}
            }
        },
        methods: {
            getPic(src){
                return '../../' + src;
            }
        },
        watch: {
            search(val) {
                if (val.length > 0) {
                    axios.get(this.$url + `search/${val}`)
                        .then(res => {
                            console.log(res);
                            this.users = res.data;
                        })
                        .catch(err => console.log(err))
                }
            }
        }
    }
</script>