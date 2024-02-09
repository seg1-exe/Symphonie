<template>
  <Albums v-if="photos.length !== 0" :photos="photos" :baseUrl="'/pochettes/'" :categories="categories" @update:cat="(p)=>filtre(p)"></Albums>
</template>

<script setup>
import {onMounted, ref} from 'vue'
import Albums from './Albums.vue'
import axios from "axios";

const photos= ref([])
const photosStart= ref( [])
const categories = ref ([{
  id: -1, nom: "Tous"
}])

onMounted(()=>{
  axios.get('/api/albums').then((response)=>{
    for (const key of Object.keys(response.data)) {
      photos.value.push({
        lien: response.data[key].pochette,
        titre: response.data[key].nom,
        mini: response.data[key].pochette,
        artiste: response.data[key].artistes[0].nom,
        id: response.data[key].id,
        categories: response.data[key].categories
      });
    } photosStart.value = photos.value;
  })
  axios.get('/api/categories').then((response)=>{
    for (const key of Object.keys(response.data)) {
      categories.value.push({
        nom: response.data[key].nom,
        id: response.data[key].id,
      })
    }
  })
})

function filtre(cat){
  if (cat.id != -1){
    photos.value = photosStart.value.filter(p=>{
    return p.categories.some(g => g.id === cat.id)
  })
  } else {
    photos.value = photosStart.value
  }
}

</script>

<style>

</style>
