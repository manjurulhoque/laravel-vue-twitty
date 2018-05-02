<template>
    <div>
        <!--Profile cover-->
        <div class="profile-cover-wrap">
            <div class="profile-cover-inner">
                <div class="profile-cover-img">
                    <!-- PROFILE-COVER -->
                    <img :src="getPic(user.profile_cover)"/>

                    <div class="img-upload-button-wrap">
                        <div class="img-upload-button1">
                            <label for="cover-upload-btn">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                            </label>
                            <span class="span-text1">
                            Change your profile photo
                        </span>
                            <input id="cover-upload-btn" type="checkbox"/>
                            <div class="img-upload-menu1">
                                <span class="img-upload-arrow"></span>
                                <form method="post" enctype="multipart/form-data">
                                    <ul>
                                        <li>
                                            <label for="file-up">
                                                Upload photo
                                            </label>
                                            <input type="file" name="profileCover" id="file-up"/>
                                        </li>
                                        <li>
                                            <label for="cover-upload-btn">
                                                Cancel
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-nav">
                <div class="profile-navigation">
                    <ul style="margin-left: 20%;">
                        <li>
                            <a href="#">
                                <div class="n-head">
                                    TWEETS
                                </div>
                                <div class="n-bottom">
                                    {{ tweets }}
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="n-head">
                                    FOLLOWINGS
                                </div>
                                <div class="n-bottom">
                                    {{ following }}
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="n-head">
                                    FOLLOWERS
                                </div>
                                <div class="n-bottom">
                                    {{ followers }}
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="n-head">
                                    LIKES
                                </div>
                                <div class="n-bottom">
                                    {{ likes }}
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="edit-button">
                    <span>
                        <button class="f-btn" type="button" value="Cancel">Cancel</button>
                    </span>
                        <span>
                        <input type="submit" @click="onSubmit" id="save" value="Save Changes">
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <!--Profile Cover End-->

        <div class="in-wrapper">
            <div class="in-full-wrap">
                <div class="in-left">
                    <div class="in-left-wrap">
                        <!--PROFILE INFO WRAPPER END-->
                        <div class="profile-info-wrap">
                            <div class="profile-info-inner">
                                <div class="profile-img">
                                    <!-- PROFILE-IMAGE -->
                                    <img :src="getPic(user.profile_image)"/>
                                    <div class="img-upload-button-wrap1">
                                        <div class="img-upload-button">
                                            <label for="img-upload-btn">
                                                <i class="fa fa-camera" aria-hidden="true"></i>
                                            </label>
                                            <span class="span-text">
                                            Change your profile photo
                                        </span>
                                            <input id="img-upload-btn" type="checkbox"/>
                                            <div class="img-upload-menu">
                                                <span class="img-upload-arrow"></span>
                                                <form method="post" enctype="multipart/form-data">
                                                    <ul>
                                                        <li>
                                                            <label for="profileImage">
                                                                Upload photo
                                                            </label>
                                                            <input id="profileImage" type="file" name="profileImage"/>
                                                        </li>
                                                        <li><a href="#">Remove</a></li>
                                                        <li>
                                                            <label for="img-upload-btn">
                                                                Cancel
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- img upload end-->
                                    </div>
                                </div>

                                <form action="" id="editForm"
                                      method="post"
                                      enctype="multipart/Form-data">
                                    <div class="profile-name-wrap">
                                        <!-- <ul>
                                              <li class="error-li">
                                                  <div class="span-pe-error"></div>
                                             </li>
                                         </ul>  -->
                                        <div class="profile-name">
                                            <input
                                                    type="text"
                                                    name="screenName"
                                                    v-model="screenName"/>
                                        </div>
                                        <div class="profile-tname">
                                            <span>@</span>{{ user.username }}
                                        </div>
                                    </div>
                                    <div class="profile-bio-wrap">
                                        <div class="profile-bio-inner">
                                            <textarea class="status" name="bio" v-model="bio">{{ bio }}</textarea>
                                        </div>
                                    </div>
                                    <div class="profile-extra-info">
                                        <div class="profile-extra-inner">
                                            <ul>
                                                <li>
                                                    <div class="profile-ex-location">
                                                        <input
                                                                style="margin-left: -40px"
                                                                id="cn"
                                                                type="text"
                                                                name="country"
                                                                v-model="country"
                                                                placeholder="Country"/>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="profile-ex-location">
                                                        <input
                                                                style="margin-left: -40px; margin-top: 10px"
                                                                type="text"
                                                                name="website"
                                                                v-model="website"
                                                                placeholder="Website"/>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="profile-extra-footer">
                            <div class="profile-extra-footer-head">
                                <div class="profile-extra-info">
                                    <ul>
                                        <li style="margin-left: -40px; margin-top: -150px;">
                                            <div class="profile-ex-location-i">
                                                <i class="fa fa-camera" aria-hidden="true"></i>
                                            </div>
                                            <div class="profile-ex-location">
                                                <a href="#">0 Photos and videos </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="profile-extra-footer-body">
                                <ul>
                                    <!-- <li><img src="#"></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--PROFILE INFO INNER END-->
                </div>
                <!--PROFILE INFO WRAPPER END-->
            </div>
            <!-- in left wrap-->
        </div>
        <!-- in left end-->
    </div>
</template>

<script>
    export default {
        props: ['user', 'tweets', 'followers', 'following', 'likes'],
        data() {
            return {
                screenName: this.user.screen_name,
                bio: this.user.bio,
                country: this.user.country,
                website: this.user.website
            }
        },
        methods: {
            getPic(src) {
                return "../../" + src;
            },
            onSubmit() {
                axios.post(this.$url + `users/${this.user.username}/update`, {
                    screenName: this.screenName,
                    bio: this.bio,
                    country: this.country,
                    website: this.website
                })
                    .then(res => {
                        this.bio = res.data.bio;
                        this.country = res.data.country;
                        this.website = res.data.website;
                        this.screenName = res.data.screen_name;
                    })
                    .catch(err => {
                        console.log(err);
                    })
            }
        }
    }
</script>