<template>
  <form @submit.prevent="submit">
    <div class="space-y-6">


      <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6">
          <label for="fullname"
                 class="block text-sm font-medium text-slate-700"
          >Ihr Name
            <span class="text-main-700 text-xs">*</span>
          </label>
          <input type="text"
                 v-model="fullname"
                 autocomplete="family-name"
                 required
                 class="mt-1 block w-full rounded-md border border-slate-300 py-2 px-3 shadow-sm focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
          >
        </div>

        <div class="col-span-6">
          <label for="emailaddress"
                 class="block text-sm font-medium text-slate-700"
          >E-Mail Addresse
            <span v-show="mailcopy"
                  class="text-main-700 text-xs"
            >*</span>
          </label>
          <input type="text"
                 v-model="emailaddress"
                 autocomplete="email"
                 :required="mailcopy"
                 class="mt-1 block w-full rounded-md border border-slate-300 py-2 px-3 shadow-sm focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
          >
        </div>

        <div class="col-span-6">
          <label for="subject"
                 class="block text-sm font-medium text-slate-700"
          >Betreff / Anliegen
          </label>
          <input type="text"
                 v-model="subject"
                 autocomplete="subject"
                 class="mt-1 block w-full rounded-md border border-slate-300 py-2 px-3 shadow-sm focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
          >
        </div>

        <div class="col-span-6">
          <label for="about"
                 class="block text-sm font-medium text-gray-700"
          >Ihre Mitteilung
            <span class="text-main-700 text-xs">*</span>
          </label>
          <div class="mt-1">
            <textarea v-model="about"
                      rows="3"
                      class="mt-1 block w-full rounded-md border border-slate-300 py-2 px-3 shadow-sm focus:border-main-500 focus:outline-none focus:ring-main-500 sm:text-sm"
            ></textarea>
          </div>
        </div>

        <div class="col-span-6">
          <div class="mt-4 space-y-4">
            <div class="flex items-start">
              <div class="flex h-5 items-center">
                <input v-model="datenschutz"
                       required
                       type="checkbox"
                       class="h-4 w-4 rounded border-gray-300 text-main-600 focus:ring-main-500 checked:bg-main-700"
                >
              </div>
              <div class="ml-3 text-sm">
                <label for="datenschutz"
                       class="font-medium text-gray-700"
                >Datenschutz
                  <span class="text-main-700 text-xs">*</span>
                </label>
                <br>
                <span class="text-gray-500 text-xs">Mit dem Absenden stimme ich der temporären Speicherung und Nutzer der übermittelten Daten zur Kontaktaufnahme zu. Details in unserer
                  <a href="/datenschutz">Datenschutzerklärung</a>.</span>
              </div>
            </div>
            <div>
              <div class="flex items-start">
                <div class="flex h-5 items-center">
                  <input v-model="mailcopy"
                         type="checkbox"
                         class="h-4 w-4 rounded border-gray-300 text-main-600 focus:ring-main-500"
                  >
                </div>
                <div class="ml-3 text-sm">
                  <label for="mailcopy"
                         class="font-medium text-gray-700"
                  >Kopie an meine E-Mail Adresse
                  </label>
                  <br>
                  <span class="text-gray-500 text-xs">Aktivieren, wenn Sie eine Kopie der versendeten Formulardaten erhalten wollen.</span>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
          <button type="submit"
                  class=" group relative flex w-full justify-center rounded-md border border-transparent bg-main-600 py-2 px-4 text-sm font-medium text-white hover:bg-main-700 focus:outline-none focus:ring-2 focus:ring-main-500 focus:ring-offset-2"
                  :disabled="formsent"
                  :class="{'bg-green-600 hover:bg-green-600 focus:ring-green-500' : formsent,'bg-green-400 hover:bg-green-400 focus:ring-green-500' : senddata}"
          >
            {{ buttontext }}
          </button>
        </div>
      </div>
    </div>
  </form>
</template>
<script setup>

import {ref} from "vue";

const  fullname = ref('');
const  emailaddress = ref('');
const  subject = ref('');
const  about = ref('');
const  datenschutz = ref(false);
const  mailcopy = ref(false);

const formsent = ref(false)
const sendcopy = ref(false)
const senddata = ref(false)

const buttontext = ref('Mitteilung verschicken')

const submit = async () => {
  formsent.value = true;
  senddata.value = true;
  buttontext.value = 'sende Daten ...'

  fetch(
      'https://portal.thermo-control.com/API/v2/sendcontactformdata.php',
      {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        headers: {
          'Accept': 'application/json',
        },
        body: JSON.stringify({
          api_key: 'KAyAcRJZUacAYGRCeCfZXRAAAIQgAAEIACBxAggThJDyY0gAAEIQAACEIAABCAAgXoIIE7q',
          fullname: fullname.value,
          emailaddress: emailaddress.value,
          subject: subject.value,
          about: about.value,
          datenschutz: datenschutz.value,
          mailcopy: mailcopy.value,
          sender:'testware.contact'
        })
      }
  ).then(response => response.json())
      .then(data => {
        senddata.value = false;
        formsent.value = data.formsent;
        buttontext.value = (data.formsent) ? 'Mitteilung erfolgreich verschickt!' : 'Mitteilung verschicken';
        setTimeout(() => {
          formsent.value = false;
          buttontext.value = 'Mitteilung verschicken';
        }, 3000)
      })


  /*   const messages = JSON.parse(localStorage.getItem("messages"));
     const { name, phonenumber} = this;
     messages.push({
       name,
       phonenumber,
     });
     localStorage.setItem("messages", JSON.stringify(messages));*/
}
</script>