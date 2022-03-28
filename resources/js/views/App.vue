<template>
    <div>
        <Header />

        <!--
        <keep-alive>
            <component :is="GetHeader"/>
        </keep-alive>
        -->

        <div id="wrapper">
            <div id="content-wrapper">

                <main class="py-4">
                    <router-view @loggedIn="change"></router-view>
                </main>

                <Footer />
            </div>
        </div>

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
        />
    </div>
</template>


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



<script>

//import Header from "./components/Header";
import Footer from "./components/Footer.vue";
//const Header = () => import("./components/Header");
import Header from "./components/Header.vue";

export default {
    //components: {
	//	'Header':Header,
	//	'Footer': Footer
	//},
    data() {
        //console.log(1);
        //console.log(Header);
        return {
            name: null,
            user_type: 0,
            isLoggedIn: localStorage.getItem("bigStore.jwt") != null
        };
    },
    computed: {
        //GetHeader(){
        //    return Header;
        //}

        //GetHeader(){
        //          if (1) return Header;
        //}
    },
    mounted() {
        //console.log(this);
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
    components: {
        Header,
        Footer
    }
};

</script>
