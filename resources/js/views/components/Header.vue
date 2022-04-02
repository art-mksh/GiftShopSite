<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="col-md-2">
                <a href="/">
                    <img
                        :src="selected_settings?.logo?.src"
                        :alt="selected_settings?.logo?.alt"
                    />
                </a>
            </div>
            <div class="col-md-10">
                <div class="row cstm-pre-header-block">
                    <div class="col-md-2 cstm-space-margin-top-1">
                        <div
                            class="row cstm-phone-elm"
                            :href="selected_settings?.default_phone?.href"
                        >
                            {{ selected_settings?.default_phone?.html }}
                        </div>
                        <div
                            class="row cstm-phone-elm"
                            :href="selected_settings?.additional_phone?.href"
                        >
                            {{ selected_settings?.additional_phone?.html }}
                        </div>
                    </div>
                    <div class="col-md-3 cstm-space-margin-top-1">
                        <span><!-- style="line-height: 3em;" -->
                            <i class="bi bi-geo-alt cstm-header-icon"></i>
                            {{ selected_settings?.address }}
                        </span>
                    </div>
                    <div
                        class="col-md-3 cstm-space-margin-top-1"
                        style="text-align: center"
                    >
                        <button
                            type="button"
                            class="btn btn-outline-primary cstm-round-btn"
                            style="margin-top: 0.4em"
                        >
                            <i class="bi bi-pencil"></i> Напиши нам
                        </button>
                    </div>
                    <div class="col-md-4 cstm-space-margin-top-1">

                        <div class="row" style="margin-top: 0.4em">

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/">
                                            <i
                                                class="bi bi-person cstm-header-icon cstm-round-icon"
                                            ></i>
                                        </a>
                                    </div>
                                    <div class="col-md-8 cstm-pre-icon-pad">
                                        <a href="/">
                                            <div class="row">
                                                <span class="cstm-enter-span">
                                                    Войти
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span
                                                    class="cstm-registration-span"
                                                >
                                                    Регистрация
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/">
                                            <i
                                                class="bi bi-cart cstm-header-icon cstm-round-icon"
                                            ></i>
                                        </a>
                                    </div>
                                    <div class="col-md-8 cstm-pre-icon-pad">
                                        <router-link to="/cart"  class="button is-warning">
                                            <div class="row">
                                                <span class="cstm-enter-span">
                                                    Корзина
                                                </span>
                                            </div>

                                            <div class="row">
                                                <span
                                                    class="cstm-registration-span"
                                                >
                                                    {{cart_items_count}}
                                                </span>
                                            </div>
                                        </router-link>
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
                            <div class="col-md-2 cstm-sub-btns">Контакты</div>
                            <div class="col-md-2 cstm-sub-btns">Рецепты</div>
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
        </div>
    </nav>
</template>

<script>
import useSiteSettings from "../../composable/SiteSettings";
import { onMounted } from "vue";
import useCartStore from "../store/cart/Cart";
//import useCartStore from "../store/cart";

//const productStore = useProductStore();

export default {
    name: "Header",
    setup() {
        const current_site_id = 1;

        const { selected_settings, getSelectedSettings } = useSiteSettings();

        const {cart_items_count, getCartItemCount} = useCartStore();
        //const count = computed(() => cartStore.count)

        onMounted(() => {
            getSelectedSettings(current_site_id);
            //const count = computed(() => cartStore.count)

            getCartItemCount();

        });

          // mounted() {
           //     this.$store.commit('updateCartFromLocalStorage')
          //  }

        return {
            selected_settings,
            cart_items_count
        };
    },
};
</script>
