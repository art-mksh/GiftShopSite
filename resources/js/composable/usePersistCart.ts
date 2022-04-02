import { onUnmounted } from 'vue'
//import { useCartStore } from '../store/cart'
//import { useCartStore } from '../../../views/store/cart.ts'
import { useCartStore } from '../views/store/cart'

export const CART_STORAGE = 'CART_STORAGE'

export const usePersistCart = () => {
   const cartStore = useCartStore()

   const unsub = cartStore.$subscribe(() => {
      localStorage.setItem(CART_STORAGE, JSON.stringify(cartStore.contents))
   })

   onUnmounted(() => {
      unsub()
   })
}
