<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="col-md-2">
                <a href="/">
                    <img
                        :src="settings.logo.src"
                        :alt="settings.logo.alt"
                    />
                </a>
            </div>
            <div class="col-md-10">
                <div class="row cstm-pre-header-block">
                    <div class="col-md-2 cstm-space-margin-top-1">
                        <div class="row cstm-phone-elm" :href="settings.default_phone.href">
                           {{ settings.default_phone.html }}
                        </div>
                        <div class="row cstm-phone-elm" :href="settings.additional_phone.href">
                            {{ settings.additional_phone.html }}
                        </div>
                    </div>
                    <div class="col-md-3 cstm-space-margin-top-1">
                        <span :style="(1?1:'line-height: 3em')">
                            <i class="bi bi-geo-alt cstm-header-icon"></i>
                            {{ settings.address }}
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
                                            <a href="/">
                                                <div class="row">
                                                    <span class="cstm-enter-span">
                                                        Корзина
                                                    </span>
                                                </div>

                                                <div class="row">
                                                    <span
                                                        class="cstm-registration-span"
                                                    >
                                                        99
                                                    </span>
                                                </div>
                                            </a>
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
                        <a href="#" class="icon" :title="facebookTooltip">
                            <i class="fab fa-facebook">{{ (1?'':settings) }}</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>


//import useCompanies from '../../composables/companies'
import useSiteSettings from "../../composable/SiteSettings";
//import axios from 'axios';

//console.log('test');

export default {
    //name: "Header",

    setup() {


                //const { companies, getCompanies } = useCompanies()

        const { settings, getSettings } = useSiteSettings();


        //const attending = ref(["Tim", "Bob", "Joe"]);

        //onMounted(getCompanies)
        //console.log('test1');
        //onMounted(getSettings);
        //console.log('test2');

        //console.log(settings);
        //getSettings();
    console.log('te1t');
        onMounted(getSettings);
        console.log(settings);
        return {
            settings,
            //sitesettings,
            //useSiteSettings,
            //attending
        };



        /*
        //const { companies, getCompanies } = useCompanies()

        const { settings, getSettings } = useSiteSettings();

        //const attending = ref(["Tim", "Bob", "Joe"]);

        //onMounted(getCompanies)
        //console.log('test1');
        //onMounted(getSettings);
        //console.log('test2');

        //console.log(settings);
        return {
            //sitesettings,
            //sitesettings,
            //useSiteSettings,
            //attending
        };

        const { settings, getSettings } = useSiteSettings()

        onMounted(getSettings)

        return {
            settings,
        }
        */




    },


    /*
        data(){


            return {
                facebookTooltip: 'Follow us on Facebook',
                sitesettings:{},

            }
        },
        computed: {
             getSettings(){
                 //console.log(useSiteSettings());
                 //this.sitesettings = useSiteSettings();
                 this.sitesettings = {'test' : 1};
                 console.log(this.sitesettings);
                 return this.sitesettings;
                 //return useSiteSettings();
             },

            numProductsAdded () {
                return this.$store.getters.productsAdded.length;
            }
        },
        */
    /*
    props: {
        facebookTooltip: "Follow us on Facebook",
        sitesettings: {
            type: Object,
            default: () => ({}),
            //default: () => (useSiteSettings())
        },
    },
    */
   /*
   data(){
        return {
            facebookTooltip: "Follow us on Facebook",


            //sitesettings: {
            //    type: Object,
            //    default: () => ({}),
           //     //default: () => (useSiteSettings())
            //},



            //settings: {
            //    type: Object,
            //    default: () => ({}),
            //    //default: () => (useSiteSettings())
            //},

            loading:true
        };
   },
   */
    /*
    getters: {
        fullName: function (state) {
            return `${state.firstName} ${state.lastName}`;
        },
    },
    actions: {
        addToFavorites(context, payload) {
            const favorites = context.state.favorites;
            favorites.push(payload);
            context.commit("UPDATE_FAVORITES", favorites);
        },
    },
    methods:{
        change_settings(settings) {
            //console.log('change settings');

            //console.log(settings);
            //this.sitesettings = settings;

        }
    },
    */
    //mounted() {
        //console.log(typeof(settings));
        //console.log('mounted');


        /*
        useSiteSettings()
            .then((response) => {

                //cur_site_set = response;

                //this.sitesettings = {'test':3};
                //console.log(response);

                //this.sitesettings = response;
                //console.log(response[1]);

                //console.log('test');
                //console.log(typeof(response[1]));
                this.settings = response[0];
                //console.log(this.settings.default_phone);

                this.settings.default_phone = {
                    'raw':this.settings.default_phone,
                    'href':this.settings.default_phone.replace(/\D/g, ''),
                    'html':this.settings.default_phone.replace(/[^+\d]+/g, "")
                };

                this.settings.additional_phone = {
                    'raw':this.settings.additional_phone,
                    'href':this.settings.additional_phone.replace(/\D/g, ''),
                    'html':this.settings.additional_phone.replace(/[^+\d]+/g, "")
                };


                this.settings.logo = {
                    'src':this.settings.logo,
                    'alt': 'main_site_logo'
                }

                //console.log(this.settings.default_phone);


                //this.settings['default_phone_number_href_formated'] = ( this.settings.default_phone).replace(/[^+\d]+/g, "");
                //this.settings['additional_phone_number_href_formated'] = ( this.settings.additional_phone).replace(/[^+\d]+/g, "");

                //this.settings['default_phone_number_href_formated'] = ( this.settings.default_phone).replace(/[^+\d]+/g, "");
                //this.settings['additional_phone_number_href_formated'] = ( this.settings.additional_phone).replace(/[^+\d]+/g, "");


                //console.log('// emit ended');

            })
            .catch((error) => {
                console.log(error);
               // console.log(error);
                this.errored = true;
                //this.settings = {};
            })
            .finally((final_response) => {
                //console.log('final response');
                //console.log(final_response);
                //console.log(this.loading);
                this.loading = false;
                //this.sitesettings = cur_site_set;
            });
        */


            //.finally(() => (this.loading = false));
    //},
     /*
    computed: {

        getSettings() {
            let total =
                (this.order.total + this.order.tax) * (1 - this.order.discount);
            let sitesettings = { test: 3 };
            //this.$emit('sitesettings', sitesettings)
            //return this.$store.getters.sitesettings;

            return sitesettings;
        },
        numProductsAdded() {
            return this.$store.getters.productsAdded.length;
        },

    }
*/

};

/*
    export default {
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
    */
</script>
