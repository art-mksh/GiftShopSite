<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
                            <div class="col-md-2">
                                <a href="/">
                                    <img src="https://varimylo.ru/wa-data/public/site/themes/club_masters/img/top_logo.png" alt="LOGO SRC">
                                </a>
                            </div>

                            <div class="col-md-10">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="row">
                                            #1 PHONE
                                        </div>
                                        <div class="row">
                                            #2 SECOND PHONE
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        ONE ADRESS
                                    </div>
                                    <div class="col-md-3">
                                          WRITE TO US BUTTON
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                LOGIN BUTTON(OR Registr)
                                            </div>
                                            <div class="col-md-6">
                                                CART BUTTON AND ICON
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        SUBDIVISION BUTTONS(5)
                                    </div>
                                    <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    SEARCH INPUT
                                                </div>
                                                <div class="col-md-2">
                                                    SEARCH START BUTTON
                                                </div>
                                            </div>
                                    </div>
                                </div>

        </div>
        <!--
        <router-link :to="{ name: 'home' }" class="navbar-brand"
          >Big Store</router-link
        >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto"></ul>

          <ul class="navbar-nav ml-auto">
            <router-link
              :to="{ name: 'login' }"
              class="nav-link"
              v-if="!isLoggedIn"
              >Login</router-link
            >
            <router-link
              :to="{ name: 'register' }"
              class="nav-link"
              v-if="!isLoggedIn"
              >Register</router-link
            >
            <span v-if="isLoggedIn">
              <router-link
                :to="{ name: 'userboard' }"
                class="nav-link"
                v-if="user_type == 0"
              >
                Hi, {{ name }}</router-link
              >
              <router-link
                :to="{ name: 'admin' }"
                class="nav-link"
                v-if="user_type == 1"
              >
                Hi, {{ name }}</router-link
              >
            </span>
            <li class="nav-link" v-if="isLoggedIn" @click="logout">Logout</li>
          </ul>
        </div>
        -->


      </div>
    </nav>
    <main class="py-4">
      <router-view @loggedIn="change"></router-view>
    </main>
  </div>
</template>

   <script>
export default {
  data() {
    return {
      name: null,
      user_type: 0,
      isLoggedIn: localStorage.getItem("bigStore.jwt") != null,
    };
  },
  mounted() {
    this.setDefaults();
  },
  methods: {
    setDefaults() {
      if (this.isLoggedIn) {
        let user = JSON.parse(localStorage.getItem("bigStore.user"));
        this.name = user.name;
        this.user_type = user.is_admin;
      }
    },
    change() {
      this.isLoggedIn = localStorage.getItem("bigStore.jwt") != null;
      this.setDefaults();
    },
    logout() {
      localStorage.removeItem("bigStore.jwt");
      localStorage.removeItem("bigStore.user");
      this.change();
      this.$router.push("/");
    },
  },
};
</script>
