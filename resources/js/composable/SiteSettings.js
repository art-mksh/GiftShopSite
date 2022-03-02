import axios from 'axios';
import VueRouter from 'vue-router';

export default function useSiteSettings() {

    const settings_url = '/site-settings';
    const company = Vue.ref([]);
    const companies = ref([]);
    const settings = ref([]);

    const errors = ref('');
    const router = VueRouter.useRouter();

    const getSettings = async () => {
        console.log(settings_url+'/${id}');
        let response = await axios.get(settings_url+'/${id}')
        //settings = response.data.data
        settings = response
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
        errors,
        //company,
        //companies,
        //getCompany,
        //getCompanies,
        //storeCompany,
        //updateCompany
        getSettings
    }
}
