<template>
    <div>
        <!-- HEADER -->
        <div class="container">
            <!--
                        <div class="row">

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



                </div>
-->
            <!--
                    <header class="main-header">
                        <div class="container row">
                            <div class="header-inner">
                                <div class="top-logo">
                                    <a href="/">
                                        <img src="/wa-data/public/site/themes/club_masters/img/top_logo.png" alt="">
                                        ЛОГО
                                    </a>
                                </div>
                            </div>
                            <div class="top-header">
                                <div class="top-info">
                                    <div class="top-info">
                                            <div class="phone">
                                                <a style="display: block;" href="tel:88005119903">Телефон 1</a>
                                                <a style="display: block;" href="tel:89024751881">Телефон 2</a>
                                            </div>
                                            <div class="adress">
                                                Адресс
                                            </div>
                                            <div class="feedback">
                                                <a class="btn btn-border green" data-fancybox="" data-src="#hidden-feedback" href="javascript:;">
                                                    <span>
                                                        Напишите нам(Кнопка письма на почту, я так понимаю, но лучше сделать чатик на сайте)
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <ul>
                                                    <li class="auth">
                                                        <a href="/login/">
                                                            <span class="title">
                                                                Войти
                                                            </span>
                                                            <span>
                                                                регистрация
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="cart">
                                                        <a href="/order/">
                                                            <span class="title">
                                                                Корзина(в cart переделать)
                                                            </span>
                                                            <span class="cart-count">
                                                                0
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                                <div class="top-actions">
                                    <div class="menu">
                                        <ul>
                                            <li>
                                                <a href="/about/">О нас</a>
                                            </li>
                                            <li>
                                                <a href="/reviews/">Отзывы</a>
                                            </li>
                                            <li>
                                                <a href="/delivery_and_payment/">Доставка и оплата</a>
                                            </li>
                                            <li>
                                                <a href="/contacts/">Контакты</a>
                                            </li>
                                            <li>
                                                <a href="/articles/mylovaru/">Рецепты</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="search">
                                        <div class="js-searchpro__field-wrapper" id="searchpro-field-wrapper-61f537452d868">
                                            <div class="js-searchpro__field" style="">
                                                <div class="searchpro__field">
                                                    <div class="searchpro__field-container js-searchpro__field-container">
                                                        <div class="searchpro__field-input-container">
                                                            <input class="searchpro__field-input js-searchpro__field-input" autocomplete="off" placeholder="Введите запрос...">
                                                            <div class="searchpro__field-clear-button js-searchpro__field-clear-button" style="display: none;"></div>
                                                        </div>
                                                        <div class="searchpro__field-button-container">
                                                            <div class="searchpro__field-button js-searchpro__field-button">
                                                                Найти
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

-->
        </div>
        <!-- (END) HEADER -->
        <!--
            <div
                class="
                    container-fluid
                    hero-section
                    d-flex
                    align-content-center
                    justify-content-center
                    flex-wrap
                    ml-auto
                "
                >
                <h2 class="title">Store TEST Example</h2>
            </div>
-->
        <!--  v-for="(product, index) in products" @key="index"  -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div
                            class="col-md-4 product-box"
                            v-for="(product, index) in products"
                            :key="index"
                        >
                        <!--    <router-link
                                :to="{ path: '/products/' + product.id }"
                            > -->
                                <img
                                    :src="product.image"
                                    :alt="product.name"
                                    style="height: 10em"
                                />
                                <h5>
                                    <span v-html="product.name"></span>
                                    <span
                                        class="small-text text-muted float-right"
                                        >$ {{ product.price }}</span
                                    >
                                </h5>
                                <button
                                    class="col-md-4 btn btn-sm btn-primary float-right"
                                    @click="addItemToCart"
                                >
                                    Удалить из корзины
                                </button>
                                <button
                                    class="col-md-4 btn btn-sm btn-primary float-right"
                                    @click="addItemToCart(product.id)"

                                >
                                    Добавить в корзину
                                </button>
                           <!-- </router-link> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

//import useCartStore from "../store/cart/Cart";
import useCartStore from "../views/store/cart/Cart";

export default {
    setup() {
        console.log('home setup')
        const {cart_items_count, removeItemToCart, addItemToCart} = useCartStore();
        return {
                    cart_items_count,
                    removeItemToCart,
                    addItemToCart
                };
    },
    data() {
        return {
            products: [],
        };
    },
    mounted() {
        axios
            .get("api/products/")
            .then((response) => (this.products = response.data));
    },
};
</script>

<style scoped>
.small-text {
    font-size: 14px;
}
.product-box {
    border: 1px solid #cccccc;
    padding: 10px 15px;
}
.hero-section {
    height: 30vh;
    background: #ababab;
    align-items: center;
    margin-bottom: 20px;
    margin-top: -20px;
}
.title {
    font-size: 60px;
    color: #ffffff;
}
</style>
