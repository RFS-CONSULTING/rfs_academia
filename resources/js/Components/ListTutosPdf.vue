<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <h2>Vos tutoriels pdf: </h2>
  <br>
  <ul role="list" class="space-y-3">
    
    <li v-for="tuto in tutos_pdf" :key="tuto.id" class="bg-white shadow px-4 py-4 sm:px-6 sm:rounded-md">
      <Link :href="route('formation.single.pdf',tuto.id)">
        {{tuto.title}}
      </Link>
    </li>
    
  </ul>
</template>

<script>
 import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ListTutosPdf = defineComponent({
    name: 'ListTutosPdf',
    components:{
        Link
    },
    props:{
        tutos_pdf:Array
    }
}
)
//console.log(ListFormations)
export default ListTutosPdf;
</script>