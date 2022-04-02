<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <h2>Vos tutoriels vidéos: </h2>
  <br>
  <ul role="list" class="space-y-3">
    
    <li v-for="tuto in tutos_videos" :key="tuto.id" class="bg-white shadow px-4 py-4 sm:px-6 sm:rounded-md">
      <Link :href="route('formation.single.video',tuto.id)">
        {{tuto.title}}
      </Link>
    </li>
    
  </ul>
</template>

<script>
 import { defineComponent } from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

const ListTutosVideos = defineComponent({
    name: 'ListTutosVideos',
    components:{
        Link
    },
    props:{
        tutos_videos:Array
    }
}
)
//console.log(ListFormations)
export default ListTutosVideos;
</script>