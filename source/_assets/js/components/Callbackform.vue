<template>
  <form class="space-y-6"
        @submit.prevent="submit"
  >
    <div class="-space-y-px rounded-md shadow-sm">
      <div>
        <label for="email-address"
               class="sr-only"
        >Name
        </label>
        <input v-model="name"
               type="text"
               autocomplete="email"
               required
               class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
               placeholder="Ihr Name"
        >
      </div>
      <div>
        <label for="password"
               class="sr-only"
        >Telefon Nummer
        </label>
        <input v-model="number"
               type="text"
               required
               class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
               placeholder="Telefonnummer: +491234567890"
        >
      </div>
    </div>

    <div>
      <button type="submit"
              class=" group relative flex w-full justify-center rounded-md border border-transparent bg-main-600 py-2 px-4 text-sm font-medium text-white hover:bg-main-700 focus:outline-none focus:ring-2 focus:ring-main-500 focus:ring-offset-2 transition-all duration-600 ease-out"
              :disabled="name==='' && number==='' || mailsent"
              :class="{
                'bg-green-600 hover:bg-green-600 focus:ring-green-500' : mailsent,
                'bg-main-400 hover:bg-main-400 focus:ring-main-500':name==='' && number===''
              }"
      >
        {{ buttontext }}
      </button>
    </div>
  </form>
</template>
<script setup>

import {ref} from "vue";

const name = ref('')
const number = ref('')
const mailsent = ref(false)
const buttontext = ref('Rückruf starten')

const submit = async () => {
  buttontext.avlue = 'Rückruf gestartet ...';
  await fetch(
      'https://portal.thermo-control.com/API/v2/setcallbackphone.php',
      {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        //   credentials: 'include',
        headers: {
          'Accept': 'application/json',
          //     'Content-Type': 'application/json',
          //        "Access-Control-Allow-Headers" : "Content-Type",
          //     "Access-Control-Allow-Origin": "*",
          //       "Access-Control-Allow-Methods": "POST"
        },
        body: JSON.stringify({
          api_key: 'KAyAcRJZUacAYGRCeCfZXRAAAIQgAAEIACBxAggThJDyY0gAAEIQAACEIAABCAAgXoIIE7q',
          name: name.value,
          number: number.value,
          sender:'testware'
        })
      }
  ).then(response => response.json())
      .then(data => {
        mailsent.value = data.mailsent;
        buttontext.value = (data.mailsent) ? 'Erfolgt!' : 'ups Fehler :( ';
        setTimeout(() => {
          mailsent.value = false;
          name.value = '';
          number.value = '';
          buttontext.value = 'Neuen Rückruf starten';
        }, 3000)
      })

}
</script>