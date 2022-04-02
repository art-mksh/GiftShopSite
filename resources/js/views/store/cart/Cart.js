import { ref } from 'vue'
import axios from 'axios'
//import { useRouter } from 'vue-router'
//import { CART_STORAGE } from '../../../composable/usePersistCart.js';
//import { CART_STORAGE } from 'composable';


import { defineStore } from 'pinia';



export default function useCartStore() {

    const store_url = '/api/store';
    //const all_settings = {};
    //const selected_settings = ref([]);
    //const item_count = 0;
    const cart_items_count = ref(0);

    const errors = ref('');
    //const router = useRouter();
    const cart_content = ref([]);
    const CART_STORAGE = 'CART_STORAGE'

    const getCartContent = async () => {

        //contents: JSON.parse(localStorage.getItem(CART_STORAGE) as string) ?? {},
        //cart_state =  JSON.parse(localStorage.getItem(CART_STORAGE));
        //запрос на АПИ на получение товаров для пользователя или данные из локала
        //cart_state.value = [{'1':2}, {'2':2}];
        cart_content.value = JSON.parse(localStorage.getItem(CART_STORAGE)) ?? {};
        //console.log(localStorage.getItem(CART_STORAGE));
        //console.log(JSON.parse(localStorage.getItem(CART_STORAGE)) ?? {});
        //cart_state.value = JSON.parse(localStorage.getItem(CART_STORAGE) as string) ?? {};

    }



    const getCartItemCount = async () => {

        await getCartContent();

        //console.log(Object.keys(cart_state.value));

        cart_items_count.value = Object.keys(cart_content.value).length;

        /*
        const current_func_url =  store_url+'/cart/${id}';

        let response = await axios.get(`/api/site-settings/${id}`);


        if(response.status == 200){


            let response_item_count = await response.data.data;


            item_count = await response_item_count;


        }
        */
    }

    const addItemToCart = async (productId) => {

        console.log('addeditem');
        console.log(productId);

        await getCartContent();

        /*
        if (this.contents[productId]) {
            this.contents[productId].quantity += 1;
          } else {
            this.contents[productId] = {
              productId,
              quantity: 1,
            };
          }
        }
        */

        if (cart_content[productId]) {
            cart_content[productId].quantity += 1;
        } else {
            cart_content[productId] = {
                productId,
                quantity: 1,
            };
        }

        localStorage.setItem(CART_STORAGE, JSON.stringify(cart_content))
    }





    /*
    localStorage.setItem(key, value)
    if (this.contents[productId]) {
        this.contents[productId].quantity += 1;
      } else {
        this.contents[productId] = {
          productId,
          quantity: 1,
        };
      }
    */
    //const cartStore = useCartStore()
    //getCartContent();

    //const unsub = cartStore.$subscribe(() => {
    //    localStorage.setItem(CART_STORAGE, JSON.stringify(cart_content))
    //})

    const removeItemToCart = async (productId) => {

        console.log('remove');

        await getCartContent();


        /*
        if (this.contents[productId]) {

            this.contents[productId].quantity -= 1;

            if (this.contents[productId].quantity === 0) {
                delete this.contents[productId];
            }
        }
        */

        if (cart_content[productId]) {

            cart_content[productId].quantity -= 1;

            if (cart_content[productId].quantity === 0) {
                delete cart_content[productId];
            }
        }

        localStorage.setItem(CART_STORAGE, JSON.stringify(cart_content));
    }

    return {
        getCartItemCount,
        removeItemToCart,
        addItemToCart,
        //getCartState,
        cart_items_count,
        //cart_state,
        errors
    };


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



/*
import { defineStore } from 'pinia';
import { CART_STORAGE } from '../composables/usePersistCart';
import { useProductStore } from './products';

export interface Purchase {
  productId: number;
  quantity: number;
}

interface CartState {
  contents: Record<string, Purchase>;
}

export interface CartPreview {
  id: number;
  image: string;
  title: string;
  quantity: number;
  cost: number;
}

export const useCartStore = defineStore({
  id: 'cart',

  state: (): CartState => ({
    contents: JSON.parse(localStorage.getItem(CART_STORAGE) as string) ?? {},
  }),

  getters: {
    count(): number {
      return Object.keys(this.contents).reduce((acc, id) => {
        return acc + this.contents[id].quantity;
      }, 0);
    },

    total(): number {
      const products = useProductStore();
      return Object.keys(this.contents).reduce((acc, id) => {
        return acc + products.items[id].price * this.contents[id].quantity;
      }, 0);
    },

    formattedCart(): CartPreview[] {
      const products = useProductStore();

      if (!products.loaded) return [];

      return Object.keys(this.contents).map((productId) => {
        const purchase = this.contents[productId];

        return {
          id: purchase.productId,
          image: products.items[purchase.productId].image,
          title: products.items[purchase.productId].title,
          quantity: purchase.quantity,
          cost: purchase.quantity * products.items[purchase.productId].price,
        };
      });
    },
  },

  actions: {
    add(productId: number) {
      if (this.contents[productId]) {
        this.contents[productId].quantity += 1;
      } else {
        this.contents[productId] = {
          productId,
          quantity: 1,
        };
      }
    },
    remove(productId: number) {
      if (!this.contents[productId]) {
        return;
      }

      this.contents[productId].quantity -= 1;

      if (this.contents[productId].quantity === 0) {
        delete this.contents[productId];
      }
    },
  },
});
*/
