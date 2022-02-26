<template>
    <div>
        <Header />

        <div id="wrapper">
            <div id="content-wrapper">
                <router-view></router-view>
                <!-- container-fluid div Replaced by router-view -->

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
<template>

    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <div class="col-md-2">
                    <a href="/">
                        <img
                            src="https://varimylo.ru/wa-data/public/site/themes/club_masters/img/top_logo.png"
                            alt="LOGO SRC"
                        />
                    </a>
                </div>

                <div class="col-md-10">
                    <div class="row cstm-pre-header-block">
                        <div class="col-md-2 cstm-space-margin-top-1">
                            <div class="row cstm-phone-elm" href="tel:88005119903">8 800 511 99 03</div>
                            <div class="row cstm-phone-elm" href="tel:88005119903">8 902 47 51 881</div>
                        </div>
                        <div class="col-md-3 cstm-space-margin-top-1">
                            <span style="line-height: 3em;">
                                <i class="bi bi-geo-alt cstm-header-icon"></i>
                                г. Пермь, ул. Пушкина, 109
                            </span>
                        </div>
                        <div class="col-md-3 cstm-space-margin-top-1" style="text-align: center;">
                            <button type="button" class="btn btn-outline-primary cstm-round-btn" style="margin-top: 0.4em;">
                                <i class="bi bi-pencil"></i> Напиши нам
                            </button>
                        </div>
                        <div class="col-md-4 cstm-space-margin-top-1">
                            <div class="row" style="margin-top: 0.4em;">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                             <i class="bi bi-person cstm-header-icon cstm-round-icon"></i>
                                        </div>
                                        <div class="col-md-8 cstm-pre-icon-pad">
                                            <div class="row">
                                               <span class="cstm-enter-span"> Войти </span>
                                            </div>
                                            <div class="row">
                                                <span class="cstm-registration-span" > Регистрация </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <i class="bi bi-cart cstm-header-icon cstm-round-icon"></i>
                                        </div>
                                        <div class="col-md-8 cstm-pre-icon-pad">
                                            <div class="row">
                                                <span class="cstm-enter-span">
                                                    Корзина
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span class="cstm-registration-span">
                                                    99
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row cstm-main-sub-row">
                        <div class="col-md-6">
                            <div class="row cstm-pre-sub-row">
                                <div class="col-md-2 cstm-sub-btns">О нас</div>
                                <div class="col-md-2 cstm-sub-btns">Отзывы</div>
                                <div class="col-md-2 cstm-sub-btns">
                                    Доставка и оплата
                                </div>
                                <div class="col-md-2 cstm-sub-btns">
                                    Контакты
                                </div>
                                <div class="col-md-2 cstm-sub-btns">
                                    Рецепты
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Введите запрос..."
                                    aria-label="Введите запрос..."
                                    aria-describedby="basic-addon2"
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn btn-outline-secondary"
                                        type="button"
                                    >
                                        Найти
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
-->

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

<!--
            </div>
        </nav>
        <main class="py-4">
            <router-view @loggedIn="change"></router-view>
        </main>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    </div>
</template>
-->

<script>

import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";

export default {
    components: {
		Header,
		Footer
	},
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
