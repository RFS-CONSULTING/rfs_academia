<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <h2>Vos formations: </h2>
  <br>
  <ul role="list" class="space-y-3">
    <li v-for="userFormation in userFormations" :key="userFormation.id" class="bg-white shadow overflow-hidden px-4 py-4 sm:px-6 sm:rounded-md">
      <!-- Your content -->
      {{userFormation.formation.title}}
    </li>
  </ul>
</template>

<script>
const items = [
  { id: 1 },
  // More items...
]

const ListFormations = {
    name: 'ListFormations',
    setup() {
        return {
            items,
        }
    },
    props:{
        userFormations:Array
    }
}
console.log(ListFormations)
export default ListFormations;
</script>