//import axios from 'axios';
//import VueRouter from 'vue-router';
//import Vue from 'vue';
//import * as Vue from 'vue'
//import { onMounted } from 'vue'



import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'




export default function useSiteSettings() {

    const settings_url = '/api/site-settings';
    //const company = Vue.ref([]);
    //const companies = ref([]);
    //const settings = ref([]);

    //let settings = {};
    //const settings = ref([]);
    const all_settings = {};
    const selected_settings = ref([]);
    //const selected_settings = {};
    const errors = ref('');
    const router = useRouter();

    //let settings = {'test':1};

    //let updated_url = settings_url;

    //const errors = ref('');
    //const router = VueRouter.useRouter();

    //console.log(settings_url);

    //const getSettings = async () => {
    const getAllSettings =  async () => {

        //console.log('settings');

        //let settings = {};
        //console.log(settings_url+'/${id}');
        //updated_url = settings_url+'/${id}';

        //let response = await axios.get(settings_url+'/${id}')
        //console.log('request12');
        const current_func_url = settings_url;
        let response = await axios.get(current_func_url);
        //console.log(response);
        //console.log('response1');

        //console.log(response);
        //console.log('response data');
        //console.log(response.data);
        //console.log('response data data');
        //console.log(response.data.data);
        //console.log('// response');

        //settings = response.data.data
        //console.log('response');
        //console.log(response);
        //console.log('//response');
        //settings = await axios.get(settings_url)
        //console.log(e);

        //console.log(settings);
        //console.log('settings11');
        //console.log(settings);
        //settings = {'test':2};
        if(response.status == 200){
            all_settings.value = await response.data.data;
            //settings = await response.data.data;
            all_settings.value[0].logo = {
                'src':await all_settings.value[0].logo,
                'alt': 'main_site_logo'
            }
            //settings = await settings.value[0];

            //console.log(settings.value);

        }


        //console.log('settings');
        //console.log(settings);

        //return settings;
    }

    const getSelectedSettings =  async (id) => {

        //console.log('id');
        //console.log(await id);
        //console.log('id end');
        const current_func_url =  settings_url+'/${id}';
        //console.log('url');
        //console.log(current_func_url);
        console.log('url END');

        //let response = await axios.get(current_func_url);
        let response = await axios.get(`/api/site-settings/${id}`);
        //console.log(response);

        //let response = await axios.get(`/api/companies/${id}`)
        //company.value = response.data.data


        //const current_func_url = settings_url+'/${id}';
        //let response = await axios.get(current_func_url);

        if(response.status == 200){

            /*
            settings.value = await response.data.data;
            //settings = await response.data.data;
            settings.value[0].logo = {
                'src':await settings.value[0].logo,
                'alt': 'main_site_logo'
            }
            */
            let updated_settings = await response.data.data;

            updated_settings.logo = {
                'src': updated_settings.logo,
                'alt': 'main_site_logo'
            }

            updated_settings.default_phone = {
                'raw': updated_settings.default_phone,
                'href': updated_settings.default_phone.replace(/\D/g, ''),
                'html': updated_settings.default_phone.replace(/[^+\d]+/g, "")
            };


            updated_settings.additional_phone = {
                'raw':updated_settings.additional_phone,
                'href':updated_settings.additional_phone.replace(/\D/g, ''),
                'html':updated_settings.additional_phone.replace(/[^+\d]+/g, "")
            };




            selected_settings.value = await updated_settings;


            //console.log(selected_settings.value);


        }

    }

    /*
    const getCompanies = async () => {
        let response = await axios.get('/api/companies')
        companies.value = response.data.data
    }

    const getCompany = async (id) => {
        let response = await axios.get(`/api/companies/${id}`)
        company.value = response.data.data
    }

    const storeCompany = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/companies', data)
            await router.push({ name: 'companies.index' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }

    }

    const updateCompany = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/companies/${id}`, company.value)
            await router.push({ name: 'companies.index' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }
    */

    return {
        getAllSettings,
        getSelectedSettings,
        all_settings,
        selected_settings,
        errors
    };

    //return getSettings();


        //errors,
        //company,
        //companies,
        //getCompany,
        //getCompanies,
        //storeCompany,
        //updateCompany
        //getSettings,
        //settings,
        //settings_url
    //}
}
