import axios from 'axios';
import VueRouter from 'vue-router';
//import Vue from 'vue';
//import * as Vue from 'vue'
//import { onMounted } from 'vue'








export default function useSiteSettings() {

    const settings_url = '/api/site-settings';
    //const company = Vue.ref([]);
    //const companies = ref([]);
    //const settings = ref([]);

    //let settings = {};
    const settings = ref({});

    //let settings = {'test':1};

    //let updated_url = settings_url;

    //const errors = ref('');
    //const router = VueRouter.useRouter();

    //console.log(settings_url);

    //const getSettings = async () => {
    const getSettings =  async () => {

        console.log('settings');

        //let settings = {};
        //console.log(settings_url+'/${id}');
        //updated_url = settings_url+'/${id}';

        //let response = await axios.get(settings_url+'/${id}')
        //console.log('request12');
        const current_func_url = settings_url;
        let response = await axios.get(current_func_url);
        console.log(response);
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
        if(response.status == 200)
            settings = await response.data.data;


        //console.log('settings');
        //console.log(settings);

        //return settings;
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
        getSettings,
        settings
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
