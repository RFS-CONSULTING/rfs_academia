<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <h2>Vos formations: </h2>
  <br>
  <ul role="list" class="space-y-3">
    
    <li v-for="userFormation in userFormations" :key="userFormation.id" class="bg-white shadow px-4 py-4 sm:px-6 sm:rounded-md">
      <Link :href="route('formation.index',userFormation.formation.id)">
        {{userFormation.formation.title}}
      </Link>
    </li>
    
  </ul>
</template>

<script>
 import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ListFormations = defineComponent({
    name: 'ListFormations',
    components:{
        Link
    },
    props:{
        userFormations:Array
    }
}
)
//console.log(ListFormations)
export default ListFormations;
</script>